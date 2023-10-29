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

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return View
     */

    public function index(): View
    {

        $data_produk = MitraProdukModel::all()->toArray();
        shuffle($data_produk);

        $rekomendasi_produk = array_slice($data_produk,0,29);

        $data_produk2 = MitraProdukModel::all()->toArray();
        shuffle($data_produk2);

        $produk_laris = array_slice($data_produk2,0,5);

        return view('index', ['rekproduk' => $rekomendasi_produk, 'produk_laris' => $produk_laris]);
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

    public function notification()
    {
        return view('notification'); // view('folder.file', compact())
    }

    public function produk($id)
    {
        $detail_produk = MitraProdukModel::find($id);
        
        // Dapatkan kategori produk saat ini
        $kategori_produk_saat_ini = $detail_produk->id_kategori;

        $produk_terkait = MitraProdukModel::where('id_kategori', $kategori_produk_saat_ini)->where('_id', '!=', $id)->take(3)->get();
        
        $kota = KotaindonesiaModel::first();

        return view('product', ['kota' => $kota, 'detail_produk' => $detail_produk, 'product_related' => $produk_terkait]); // view('folder.file', compact())
    }

    public function cart($id_user)
    {
        $cart_items = CartModel::where('user_id',$id_user)->get();

        return view('/cart', ['cart_items' => $cart_items]);
    }

    public function store_cart($id, $id_produk, $id_supplier, $nama_produk, $varian, $harga, $qty, $subtotal, $note, $foto_produk)
    {
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

    public function checkOut($id_user)
    {
        // Mengambil semua data dari CheckOutModel berdasarkan user_id
        $data_produk = CheckOutModel::where('user_id', $id_user)->get();

        $produk = [];
        $data_supplier = [];

        foreach ($data_produk as $item) {
            // Mengambil satu data MitraProdukModel berdasarkan produk_id di setiap item data produk
            $produk[] = MitraProdukModel::where('_id', $item->produk_id)->first();

            // Mengambil satu data SuppliersModel berdasarkan supplier_id di setiap item data produk
            $data_supplier[] = SuppliersModel::where('_id', $item->supplier_id)->first();
        }

        $data_user = KonsumensModel::where('_id', $id_user)->first();
        $metode_pembayaran = MetodePembayaranModel::all();

        return view('/checkout', ['data_produk' => $data_produk, 'produk' => $produk, 'data_supplier' => $data_supplier, 'data_user' => $data_user, 'metode_pembayaran' => $metode_pembayaran]);
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

    public function store_orders($data_orders, $alamat_pengiriman, $metode_pembayaran, $opsi_pengiriman, $biaya_ongkir, $biaya_layanan, $biaya_asuransi, $biaya_tambahan, $subtotal, $total_harga, $status){
        $data = json_decode(urldecode($data_orders), true);
        
        foreach($data as $do){
            PurchaseModel::create([
                'id_user' => $do['id_user'],
                'id_supplier' => $do['id_supplier'],
                'id_produk' => $do['id_produk'],
                'nama_produk'=> $do['nama_produk'],
                'varian' => $do['varian'],
                'harga' => $do['harga'],
                'qty' => $do['qty'],
                'alamat_pengiriman' => $alamat_pengiriman,
                'metode_pembayaran' => $metode_pembayaran,
                'opsi_pengiriman' => $opsi_pengiriman,
                'biaya_ongkir' => $biaya_ongkir,
                'biaya_layanan' => $biaya_layanan,
                'biaya_asuransi' => $biaya_asuransi,
                'biaya_tambahan' => $biaya_tambahan,
                'subtotal' => $subtotal,
                'total_harga' => $total_harga,
                'status' => $status
            ]);
        }

        return redirect()->to('/checkout_payment' . '/' . $metode_pembayaran);
    }

    public function checkout_payment($slug)
    {
        $metode_pembayaran = MetodePembayaranModel::where('slug',$slug)->first();

        return view('checkout_payment'); // view('folder.file', compact())
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
