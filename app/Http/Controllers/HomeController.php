<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel; // memanggil model dalam folder Models
use App\Models\MitraProdukModel;
use App\Models\SuppliersModel;
use App\Models\CartModel;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

    public function produk($id)
    {
        $detail_produk = MitraProdukModel::find($id);

        return view('product', ['detail_produk' => $detail_produk]); // view('folder.file', compact())
    }

    public function cart()
    {
        $cart_items = CartModel::all();

        return view('/cart', ['cart_items' => $cart_items]);
    }

    public function store_cart($id_produk, $id, $foto_produk, $nama_produk, $varian, $quantity, $harga, $subtotal, $note)
    {
        CartModel::create([
            'user_id' => $id,
            'foto' => $foto_produk,
            'nama_produk' => $nama_produk,
            'varian' => $varian,
            'harga' => $harga,
            'qty' => $quantity,
            'subtotal' => $subtotal,
            'note' => $note
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

    public function checkOut(): View
    {
        return view('checkOut'); // view('folder.file', compact())
    }
}
