<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel; // memanggil model dalam folder Models
use App\Models\MitraProdukModel;
use App\Models\SuppliersModel;

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
        return view('index',['rekProduk' => $rekProduk]); // view('folder.file', compact())
    }

    public function searchProduct()
    {
        return view('searchProduct'); // view('folder.file', compact())
    }

    public function produk($id)
    {
        $detail_produk = MitraProdukModel::find($id);

        return view('product',['detail_produk' => $detail_produk]); // view('folder.file', compact())
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkOut(): View
    {
        return view('checkOut'); // view('folder.file', compact())
    }

}