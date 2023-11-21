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
use App\Models\RReviewsModel;

use App\Http\Requests\StoreFileRequest;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class MitraController extends Controller
{
    public function toko($id_supplier)
    {
        $data = SuppliersModel::find($id_supplier);
        $produk_toko = MitraProdukModel::where("supplier_id", $id_supplier)->get();
        $produk_data = [];

        // menghitung rating, untuk bagian produk toko
        foreach ($produk_toko as $pt) {
            $id_produk = $pt->_id;
            $jumlah_allrating = RReviewsModel::where('id_produk', $id_produk)->get()->sum('ratings');
            $jumlah_reviews = RReviewsModel::where('id_produk', $id_produk)->count();
            $jumlah_terjual = PurchaseModel::where('id_produk', $id_produk)->count();

            $avgRating = ($jumlah_reviews != 0) ? round(doubleval($jumlah_allrating / $jumlah_reviews), 1) : "0";

            $produk_data[] = [
                'id_produk' => $id_produk,
                'jumlah_allrating' => $jumlah_allrating,
                'jumlah_reviews' => $jumlah_reviews,
                'jumlah_terjual' => $jumlah_terjual,
                'avgRating' => $avgRating,
            ];
        }

      // Menghitung rating untuk toko berdasarkan rata-rata rating produk
        $totalRatingProduk = 0;
        $banyakProduk = count($produk_data);

        foreach ($produk_data as $pd) {
            $totalRatingProduk += $pd['avgRating'];
        }

        $avgRatingToko = ($banyakProduk != 0) ? round(doubleval($totalRatingProduk / $banyakProduk), 1) : "0";

        return view('toko', ['toko' => $data, 'produk_toko' => $produk_toko, 'jumlah_produk' => $banyakProduk, 'produk_data' => $produk_data, 'rating_toko' => $avgRatingToko]);
    }

    public function trenDaging()
    {
        // menghitung jumlah transaksi
        $data_produk = MitraProdukModel::all();
        $produkData = [];
        $totalTransaction = 0;

        foreach ($data_produk as $dp) {
            $data = PurchaseModel::where('id_supplier', $dp->supplier_id)->get();

            // Periksa apakah $data tidak kosong sebelum mengakses properti
            if (!$data->isEmpty()) {
                
                // Hitung total subtotal dari setiap transaksi
                foreach ($data as $transaction) {
                    $totalTransaction += str_replace(".","",$transaction->subtotal);
                }

                $jumlahTerjual = PurchaseModel::where('id_produk', $dp->_id)->count();
                $produkData[]=[
                    'id_produk' => $dp->_id,
                    'jumlah_terjual' => $jumlahTerjual
                ];
            }
        }   
        // end menghitung jumlah transaksi

        // grafik
        $produk = PurchaseModel::all();
        $getDataPenjualan = [];
        
        foreach ($produk as $p) {
            $getProduk = PurchaseModel::where('nama_produk', $p->nama_produk)->get();
        
            if (!$getProduk->isEmpty()) {
                $getDataPenjualan[$p->nama_produk] = count($getProduk);
            }
        }
        
        $dataPenjualanBerdasarkanKategori = [];
        
        foreach ($getDataPenjualan as $namaProduk => $jumlahPenjualan) {
            $mitraProduk = MitraProdukModel::where('nama_produk', $namaProduk)->first();
        
            if (!empty($mitraProduk)) {
                $dataPenjualanBerdasarkanKategori[] = [
                    'nama_produk' => $namaProduk,
                    'kategori' => $mitraProduk->id_kategori,
                    'jumlah_penjualan' => $jumlahPenjualan,
                ];
            }
        }
        // end grafik
        
        // Urutkan produk berdasarkan jumlah terjual secara descending
        usort($produkData, function ($a, $b) {
            return $b['jumlah_terjual'] - $a['jumlah_terjual'];
        });

        // Inisialisasi array untuk menyimpan produk terlaris
        $dataTrend = [];

        // Ambil 5 produk terlaris
        for ($i = 0; $i < 5; $i++) {
            if (isset($produkData[$i])) {
                $dataTrend[] = MitraProdukModel::find($produkData[$i]['id_produk']);
            }
        }


        return view('mitra_center.trenDaging',['dataTrend' => $dataTrend,'produkData' => $produkData ,'transaksi' => $totalTransaction, 'data' => json_encode($dataPenjualanBerdasarkanKategori)]);
    }

    public function pesanan($id_supplier)
    {
        $data_produk = MitraProdukModel::all();
        $data_transaksi = [];
        $totalTransaction = 0;

        foreach ($data_produk as $dp) {
            $data = PurchaseModel::where('id_supplier', $dp->supplier_id)->get();

            // Periksa apakah $data tidak kosong sebelum mengakses properti
            if (!$data->isEmpty()) {
                // Hitung total subtotal dari setiap transaksi
                foreach ($data as $transaction) {
                    $totalTransaction += str_replace(".","",$transaction->subtotal);
                }
            }
        }   

        $pesanan = PurchaseModel::where('id_supplier', $id_supplier)->get();

        return view('mitra_center.pesanan',['pesanan' => $pesanan, 'transaksi' => $totalTransaction]); // view('folder.file', compact())
    }

    public function change_status($id_supplier,$id_pesanan,$status)
    {
        PurchaseModel::where('_id',$id_pesanan)->update(['status' => $status]);

        return redirect()->to('/pesanan' . '/' . $id_supplier); // view('folder.file', compact())
    }

    public function langganan(): View
    {
        $data_produk = MitraProdukModel::all();
        $data_transaksi = [];
        $totalTransaction = 0;

        foreach ($data_produk as $dp) {
            $data = PurchaseModel::where('id_supplier', $dp->supplier_id)->get();

            // Periksa apakah $data tidak kosong sebelum mengakses properti
            if (!$data->isEmpty()) {
                // Hitung total subtotal dari setiap transaksi
                foreach ($data as $transaction) {
                    $totalTransaction += str_replace(".","",$transaction->subtotal);
                }
            }
        }   

        return view('mitra_center.langganan',['transaksi' => $totalTransaction]); // view('folder.file', compact())
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

        $data_produk = MitraProdukModel::all();
        $data_transaksi = [];
        $totalTransaction = 0;

        foreach ($data_produk as $dp) {
            $data = PurchaseModel::where('id_supplier', $dp->supplier_id)->get();

            // Periksa apakah $data tidak kosong sebelum mengakses properti
            if (!$data->isEmpty()) {
                // Hitung total subtotal dari setiap transaksi
                foreach ($data as $transaction) {
                    $totalTransaction += str_replace(".","",$transaction->subtotal);
                }
            }
        }   

        
        $kategori = KategoriModel::all();

        return view('mitra_center.daftarProduk', ['daftarProduk' => $daftarProduk, 'kategori' => $kategori, 'transaksi' => $totalTransaction]);
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
