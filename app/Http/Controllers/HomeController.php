<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel; // memanggil model dalam folder Models
use App\Models\MitraProdukModel;
use App\Models\SuppliersModel;
use App\Models\CartModel;
use App\Models\KotaIndonesiaModel;
use App\Models\CheckOutModel;

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
        $rekProduk = MitraProdukModel::all();
        return view('index', ['rekProduk' => $rekProduk]); // view('folder.file', compact())
    }

    public function searchProduct()
    {
        return view('searchProduct'); // view('folder.file', compact())
    }

    public function checkout_payment()
    {
        return view('checkout_payment'); // view('folder.file', compact())
    }

    public function notification()
    {
        return view('notification'); // view('folder.file', compact())
    }

    public function produk($id)
    {
        $detail_produk = MitraProdukModel::find($id);
        $kota = KotaindonesiaModel::first();

        return view('product', ['kota' => $kota, 'detail_produk' => $detail_produk]); // view('folder.file', compact())
    }

    public function cart()
    {
        $cart_items = CartModel::all();

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

        $data =  CartModel::find($id);

        $data->delete();

        return redirect()->to('/cart');
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

        return view('/checkout', ['data_produk' => $data_produk, 'produk' => $produk, 'data_supplier' => $data_supplier, 'data_user' => $data_user]);
    }


    public function store_checkout($id_user, $id_supplier, $id_produk, $data_keranjang, $harga_total, $foto)
    {
        $data = json_decode(urldecode($data_keranjang), true);

        foreach ($data as $d) {
            CheckOutModel::create([
                'user_id' => $id_user,
                'supplier_id' => $id_supplier,
                'produk_id' => $id_produk,
                'foto' => $foto,
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
