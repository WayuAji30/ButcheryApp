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
use App\Models\KategoriModel;
use App\Http\Requests\StoreFileRequest;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class MitraController extends Controller
{
    public function trenDaging(): View
    {
        return view('mitra_center.trenDaging'); // view('folder.file', compact())
    }

    public function pesanan($id_supplier)
    {
        $pesanan = PurchaseModel::where('id_supplier', $id_supplier)->get();

        return view('mitra_center.pesanan',['pesanan' => $pesanan]); // view('folder.file', compact())
    }

    public function change_status($id_supplier,$id_pesanan,$status)
    {
        PurchaseModel::where('_id',$id_pesanan)->update(['status' => $status]);

        return redirect()->to('/pesanan' . '/' . $id_supplier); // view('folder.file', compact())
    }

    public function langganan(): View
    {
        return view('mitra_center.langganan'); // view('folder.file', compact())
    }

    public function daftarProduk(Request $request, $id)
    {
        $keyword = $request->input('cari_daftarproduk');
        $kategori = $request->input('cari_daftarproduk');
        $filter = $request->input('cari_daftarproduk');
         
        if($keyword){
            $daftarProduk = MitraProdukModel::where('supplier_id',$id)->where('nama_produk','regex', new \MongoDB\BSON\Regex($keyword, 'i'))->orWhere('id_kategori',$kategori)->get();
        }else if($kategori){
            $daftarProduk = MitraProdukModel::where('supplier_id',$id)->where('id_kategori',$kategori)->get();

        }
        else{
            $daftarProduk = MitraProdukModel::where('supplier_id',$id)->get();
        }
        
        $kategori = KategoriModel::all();

        return view('mitra_center.daftarProduk', ['daftarProduk' => $daftarProduk, 'kategori' => $kategori]);
    }
    
    public function tambahProduk()
    {
        $kategori = KategoriModel::all();

        return view('mitra_center.tambahProduk', ['kategori' => $kategori]); // view('folder.file', compact())
    }

    public function store_produk(Request $request)
    {
        $this->validate($request, [
            'foto1' => 'required|image|mimes:jpg,jpeg,png,svg',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|string|max:1200',
            'varian.varian1' => 'required',
            'varian.harga1' => 'required',
            'varian.stok1' => 'required'
        ]);

        //upload image
        $image = $request->file('foto1');
        if(isset($image)){
            $image->storeAs('img_uploaded', $image->hashName(), 'public');
            $image = $image->hashName();
        }else{
            $image = "tidak upload foto";
        }

        //upload image
        $image2 = $request->file('foto2');
        if(isset($image2)){
            $image2->storeAs('img_uploaded', $image2->hashName(), 'public');
            $image2 = $image2->hashName();
        }else{
            $image2 = "tidak upload foto";
        }

        //upload image
        $image3 = $request->file('foto3');
        if(isset($image3)){
            $image3->storeAs('img_uploaded', $image3->hashName(), 'public');
            $image3 = $image3->hashName();
        }else{
            $image3 = "tidak upload foto"; 
        }

        $user_id = $request->input('user_id');

        $data_supplier = SuppliersModel::where('user_id', $user_id)->first();

        $kota = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regency/' . $data_supplier['alamat'][0]['kota'] . '.json');
        $response2 = $kota->json();

        $nama_produk = $request->input('nama_produk');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');
        
        $varian1 = $request->input('varian.varian1');
        $harga1 = $request->input('varian.harga1');
        $stok1 = $request->input('varian.stok1');
        
        $varian2 = $request->input('varian.varian2');
        $harga2 = $request->input('varian.harga2');
        $stok2 = $request->input('varian.stok2');
        
        $varian3 = $request->input('varian.varian3');
        $harga3 = $request->input('varian.harga3');
        $stok3 = $request->input('varian.stok3');

        
        MitraProdukModel::create([
            'supplier_id' => $data_supplier->_id,
            'nama_toko' => $data_supplier->nama_toko,
            'alamat_toko' => [
                'id_alamat' => $response2['id'],
                'alamat' => $response2['name']
            ],
            'foto' => [
                'foto1' => $image,
                'foto2' => $image2,
                'foto3' => $image3
            ],
            'nama_produk' => $nama_produk,
            'id_kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'varian' => [
                [
                    'varian1' => $varian1,
                    'harga1' => $harga1,
                    'stok1' => $stok1,
                ],
                [
                    'varian2' => $varian2,
                    'harga2' => $harga2,
                    'stok2' => $stok2,
                ],
                [
                    'varian3' => $varian3,
                    'harga3' => $harga3,
                    'stok3' => $stok3,
                ],
            ]
        ]);

        return redirect()->to('/daftarProduk'. '/' . $data_supplier->_id);
    }

    public function deleteProduk(Request $request)
    {
        $produk_id = $request->input('id_produk');
        $supplier_id = $request->input('supplier_id');

        $produk = MitraProdukModel::find($produk_id); 

        $produk->delete();

        return redirect()->to('/daftarProduk'. '/' . $supplier_id);
    }

    public function updateProduk($id)
    {
        $kategori = KategoriModel::all();
        $produk = MitraProdukModel::find($id);

        return view('mitra_center.tambahProduk', ['produk' => $produk, 'kategori' => $kategori]); // view('folder.file', compact())
    }

    public function edit_produk(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|string|max:1200',
            'varian.varian1' => 'required',
            'varian.harga1' => 'required',
            'varian.stok1' => 'required'
        ]);

        //upload image

        $new_image = $request->file('foto1');
        if ($new_image) {
            $image = $new_image;
            $image->storeAs('img_uploaded', $image->hashName(), 'public');
        } else {
            $image = $request->input('old_foto1');
        }

        //upload image2
        $new_image2 = $request->file('foto2');
        if ($new_image2) {
            $image2 = $new_image2;
            $image2->storeAs('img_uploaded', $image2->hashName(), 'public');
        } else {
            $image2 = $request->input('old_foto2');
        }

        //upload image3
        $new_image3 = $request->file('foto3');
        if ($new_image3) {
            $image3 = $new_image3;
            $image3->storeAs('img_uploaded', $image3->hashName(), 'public');
        } else {
            $image3 = $request->input('old_foto3');
        }

        $id = $request->input('id');
        $supplier_id = $request->input('supplier_id');
        $nama_produk = $request->input('nama_produk');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');
        
        $varian1 = $request->input('varian.varian1');
        $harga1 = $request->input('varian.harga1');
        $stok1 = $request->input('varian.stok1');
        
        $varian2 = $request->input('varian.varian2');
        $harga2 = $request->input('varian.harga2');
        $stok2 = $request->input('varian.stok2');

        $varian3 = $request->input('varian.varian3');
        $harga3 = $request->input('varian.harga3');
        $stok3 = $request->input('varian.stok3');

        MitraProdukModel::where('_id', $id)->update([
            'foto' => [
                'foto1' => (isset($new_image) ? $image->hashName() : $image),
                'foto2' => (isset($new_image2) ? $image2->hashName() : $image2),
                'foto3' => (isset($new_image3) ? $image3->hashName() : $image3),
            ],
            'nama_produk' => $nama_produk,
            'id_kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'varian' => [
                [
                    'varian1' => $varian1,
                    'harga1' => $harga1,
                    'stok1' => $stok1,
                ],
                [
                    'varian2' => $varian2,
                    'harga2' => $harga2,
                    'stok2' => $stok2,
                ],
                [
                    'varian3' => $varian3,
                    'harga3' => $harga3,
                    'stok3' => $stok3,
                ]
            ]
        ]);

        return redirect()->to('/daftarProduk' . '/' . $supplier_id);
    }
}
