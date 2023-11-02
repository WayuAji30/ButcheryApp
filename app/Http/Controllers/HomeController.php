<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel; // memanggil model dalam folder Models
use App\Models\MitraProdukModel;
use App\Models\SuppliersModel;
use App\Models\CartModel;
use App\Models\KotaIndonesiaModel;
use App\Models\CheckOutModel;
use App\Models\MetodePembayaranModel;
use App\Models\PurchaseModel;
use App\Models\RReviewsModel;
use App\Models\NotificationModel;
use App\Notifications\ProductNotification;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;


class HomeController extends Controller
{
    /**
     * index
     *
     * @return View
     */

    public function index(): View
    {

        $data_produk = MitraProdukModel::all();

        $produk_data = [];
        
        foreach ($data_produk as $dp) {
            $id_produk = $dp->_id;
            $jumlah_allrating = RReviewsModel::where('id_produk', $id_produk)->sum('ratings');
            $jumlah_reviews = RReviewsModel::where('id_produk', $id_produk)->count();
            $jumlah_terjual = PurchaseModel::where('id_produk', $id_produk)->count();
        
            $avgRating = ($jumlah_reviews != 0) ? doubleval($jumlah_allrating / $jumlah_reviews) : "0";
        
            $produk_data[] = [
                'id_produk' => $id_produk,
                'jumlah_allrating' => $jumlah_allrating,
                'jumlah_reviews' => $jumlah_reviews,
                'jumlah_terjual' => $jumlah_terjual,
                'avgRating' => $avgRating,
            ];
        }

        // Urutkan produk berdasarkan jumlah terjual secara descending
        usort($produk_data, function ($a, $b) {
            return $b['jumlah_terjual'] - $a['jumlah_terjual'];
        });

        // Inisialisasi array untuk menyimpan produk terlaris
        $data_produk_laris = [];

        // Ambil 5 produk terlaris
        for ($i = 0; $i < 5; $i++) {
            if (isset($produk_data[$i])) {
                $data_produk_laris[] = MitraProdukModel::find($produk_data[$i]['id_produk']);
            }
        }

        $data_produk = MitraProdukModel::all()->toArray();
        shuffle($data_produk);

        $rekomendasi_produk = array_slice($data_produk,0,29);

        return view('index', ['rekproduk' => $rekomendasi_produk, 'produk_laris' => $data_produk_laris, 'produk_data' => $produk_data]);
    }

    public function searchProduct(Request $request)
    {
        $name = $request->input('cari');

        $data_search = MitraProdukModel::where('nama_produk','regex', new \MongoDB\BSON\Regex($name, 'i'))->get();

        $total_data = count($data_search);

        return view('searchProduct',['data_search' => $data_search, 'kata_kunci' => $name, 'total_data' => $total_data]); // view('folder.file', compact())
    }

    public function searchProductByKategori($slug)
    {
        $data_search = MitraProdukModel::where('id_kategori',$slug)->get();

        $total_data = count($data_search);

        return view('searchProduct',['data_search' => $data_search, 'slug'=>$slug, 'total_data' => $total_data]); // view('folder.file', compact())
    }

    public function notification($id)
    {
        $pesanan = PurchaseModel::where('id_user',$id)->get();
        
        $produks =  [];
        foreach($pesanan as $pe){
            $produk = MitraProdukModel::find($pe->id_produk);
            $produks[]=$produk;
        }
        
        $data_user = KonsumensModel::find($id);

        if(!session()->has('login')){
            return redirect()->to('/login');
        }

        return view('notification',['pesanan' => $pesanan, 'data_user' => $data_user, 'produk' => $produks[0]]); // view('folder.file', compact())
    }

    public function produk($id)
    {
        $detail_produk = MitraProdukModel::find($id);
        $jumlah_allrating = RReviewsModel::where('id_produk',$id)->sum('ratings');   
        $jumlah_reviews = RReviewsModel::where('id_produk',$id)->count('reviews');
        $jumlah_terjual = PurchaseModel::where('id_produk',$id)->count();

        if($jumlah_reviews != 0){
            $avgRating = doubleval($jumlah_allrating / $jumlah_reviews);
        }else{
            $avgRating = "";
        }

        $data_reviews = RReviewsModel::where('id_produk',$id)->get();

        $data_user = [];

        foreach($data_reviews as $dr){
            $users = KonsumensModel::where('_id', $dr->id_user)->get();
            $data_user[]=$users;
        }

        // Dapatkan kategori produk saat ini
        $kategori_produk_saat_ini = $detail_produk->id_kategori;

        $produk_terkait = MitraProdukModel::where('id_kategori', $kategori_produk_saat_ini)->where('_id', '!=', $id)->take(3)->get();
        
        $kota = KotaindonesiaModel::first();

        return view('product', ['kota' => $kota, 'detail_produk' => $detail_produk, 'product_related' => $produk_terkait, 'rating' => $avgRating, 'terjual' => $jumlah_terjual ,'jumlah_reviews' => $jumlah_reviews ,'reviews' => $data_reviews, 'data_user' => $data_user]); // view('folder.file', compact())
    }

    public function cart($id_user)
    {
        $cart_items = CartModel::where('user_id',$id_user)->get();

        return view('/cart', ['cart_items' => $cart_items]);
    }

    public function store_cart($id, $id_produk, $id_supplier, $nama_produk, $varian, $harga, $qty, $subtotal, $note, $foto_produk)
    {
        $dataLama = CartModel::all()->count();

        CartModel::create([
            'user_id' => $id,
            'produk_id' => $id_produk,
            'supplier_id' => $id_supplier,
            'nama_produk' => $nama_produk,
            'varian' => $varian,
            'harga' => $harga,
            'qty' => $qty,
            'subtotal' => $subtotal,
            'note' => $note,
            'foto' => $foto_produk
        ]);

        $dataBaru =CartModel::all()->count();

        if($dataBaru > $dataLama){
            session(['NewDataCart' => true]);
        }

        return redirect()->to('/produk' . '/' . $id_produk);
    }

    public function deleteCart(Request $request)
    {
        $id = $request->input('id_cart_items');
        $id_user = $request->input('id_user');

        $data =  CartModel::find($id);

        $data->delete();

        return redirect()->to('/cart'. '/' . $id_user);
    }

    public function hapusCheckout(Request $request)
    {
        $id_purchase = $request->input('id_purchase');
        $id_checkout = $request->input('id_checkout');
        $id_user = $request->input('id_user');

        CheckOutModel::find($id_checkout)->delete();
        PurchaseModel::find($id_purchase)->delete();

        return redirect()->to('/cart'. '/' . $id_user);
    }

    public function checkOut($id_user)
    {
        $data_produk = CheckOutModel::where('user_id', $id_user)->get();
        $data_user = KonsumensModel::where('_id', $id_user)->first();
        $metode_pembayaran = MetodePembayaranModel::all();

        return view('/checkout', ['data_produk' => $data_produk,'data_user' => $data_user, 'metode_pembayaran' => $metode_pembayaran]);
    }


    public function store_cartcheckout($id_user, $data_keranjang, $harga_total, $foto)
    {
        $data = json_decode(urldecode($data_keranjang), true);

        foreach ($data as $d) {
            CheckOutModel::create([
                'user_id' => $d['id_user'],
                'supplier_id' => $d['id_supplier'],
                'produk_id' => $d['id_produk'],
                'foto' => $d['foto_produk'],
                'nama_produk' => $d['nama_produk'],
                'varian' => $d['varian'],
                'harga' => $d['harga'],
                'qty' => $d['qty'],
                'harga_total' => $harga_total,
                'note' => $d['note']
            ]);
        }

        return redirect()->to('/checkOut' . '/' . $id_user);
    }

    public function store_checkout($id_user, $id_supplier, $id_produk, $foto,$nama_produk,$varian,$harga,$qty,$harga_total, $note)
    {
        CheckOutModel::create([
            'user_id' => $id_user,
            'supplier_id' => $id_supplier,
            'produk_id' => $id_produk,
            'foto' => $foto,
            'nama_produk' => $nama_produk,
            'varian' => $varian,
            'harga' => $harga,
            'qty' => $qty,
            'harga_total' => $harga_total,
            'note' => $note
        ]);
        

        return redirect()->to('/checkOut' . '/' . $id_user);
    }

    public function store_orders($data_orders, $opsi_pengiriman, $biaya_ongkir, $biaya_layanan, $biaya_asuransi, $biaya_tambahan, $subtotal, $total_harga, $status, $alamatPengiriman){

         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = config('midtrans.server_key');
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;

        $data = json_decode(urldecode($data_orders), true);

        $dataLama = PurchaseModel::all()->count();

        foreach($data as $do){
           $order = PurchaseModel::create([
                'id_user' => $do['id_user'],
                'id_supplier' => $do['id_supplier'],
                'id_produk' => $do['id_produk'],
                'foto' => $do['foto'],
                'nama_produk'=> $do['nama_produk'],
                'varian' => $do['varian'],
                'harga' => $do['harga'],
                'qty' => $do['qty'],
                'alamat_pengiriman' => $alamatPengiriman,
                'opsi_pengiriman' => $opsi_pengiriman,
                'biaya_ongkir' => $biaya_ongkir,
                'biaya_layanan' => $biaya_layanan,
                'biaya_asuransi' => $biaya_asuransi,
                'biaya_tambahan' => $biaya_tambahan,
                'subtotal' => $subtotal,
                'total_harga' => $total_harga,
                'status' => $status
            ]);

            $params = array(
                'transaction_details' => array(
                    'order_id' => $order->_id,
                    'gross_amount' => $order->total_harga,
                ),
                'customer_details' => array(
                   'id_user' => $order->id_user
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
        }

        $dataBaru = PurchaseModel::all()->count();

        if($dataBaru > $dataLama){
            session(['NewDataPesanan' => true]);
        }

        return redirect()->to('/checkout_payment' .'/' . $order->id_user . '?snapToken=' . $snapToken);
    }

    public function checkout_payment(Request $request,$id_user)
    {
        $snapToken = $request->get('snapToken');

        $order = PurchaseModel::where('id_user',$id_user)->get();
        $total_produk = count($order);
        
        $data_order = PurchaseModel::where('id_user',$id_user)->first();

        return view('checkout_payment',['data_order' => $data_order,'total_produk' => $total_produk, 'snapToken' => $snapToken ]); // view('folder.file', compact())
    }

    public function after_payment($id,$id_cart,$id_checkout,$varian){
        CartModel::find($id_cart)->delete();
        CheckOutModel::find($id_checkout)->delete();
        PurchaseModel::where('id_user',$id)->update(['status' => 'sudah bayar']);

        $stok = MitraProdukModel::where('varian',$varian)->first();

        $jmlh_stok = $stok['varian'][0]['stok'] - 1;

        MitraProdukModel::where('varian',$varian)->update(['stok' => $jmlh_stok]);

        return redirect()->to('/');
    }

    public function changeStatusByKonsumen($id_user,$id_pesanan,$status)
    {
        PurchaseModel::where('_id',$id_pesanan)->update(['status' => $status]);

        return redirect()->to('/'); // view('folder.file', compact())
    }

    public function store_rrviews(Request $request){
        $id_pesanan = $request->input('id_pesanan');
        $id_user = $request->input('id_user');
        $id_produk = $request->input('id_produk');
        $reviews = $request->input('reviews');
        $rating = $request->input('rating');

        $data_pesanan = PurchaseModel::where('_id',$id_pesanan)->update(['status' => 'Sudah dinilai']);

        var_dump($id_pesanan);exit;
       
        RReviewsModel::create([
            'id_user' => $id_user,
            'id_produk' => $id_produk,
            'reviews' => $reviews,
            'ratings' => $rating
        ]);

        return redirect()->to('/notification' . '/' . $id_user);
    }

    public function test_api(Request $request)
    {
        $alamat = $request->input('alamat');
        $alamat2 = $request->input('alamat2');

        $alamat = Http::get('https://geocode.search.hereapi.com/v1/geocode?q=' . $alamat . '&apiKey=HTj_6XDXdyLOEp6qCjTJ4blivZv94GheROStKRoIFA8');

        $response = $alamat->json();

        $alamat2 = Http::get('https://geocode.search.hereapi.com/v1/geocode?q=' . $alamat2 . '&apiKey=HTj_6XDXdyLOEp6qCjTJ4blivZv94GheROStKRoIFA8');

        $response2 = $alamat2->json();


        dd([$response, $response2]);
    }
}
