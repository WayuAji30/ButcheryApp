<?php

namespace App\Http\Controllers;

use App\Models\KonsumensModel;
use App\Models\AdminModel;
use App\Models\MitraProdukModel;
use App\Models\KategoriModel;
use App\Models\RReviewsModel;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.loginAdmin'); // view('folder.file', compact())
    }

    public function authAdmin(Request $request)
    {
        $this->validate($request, [
            'identifier' => 'required',
            'password' => 'required'
        ]);

        $identifier = $request->input('identifier');
        $password = $request->input('password');

        $idn = AdminModel::where('email', $identifier)->first();

        if ($idn) {
            if (Hash::check($password, $idn->password)) {
                session(['loginAdmin' => true]);
                return redirect()->to('/adminProduk');
            } else {
                return redirect()->to('/loginAdmin')->with(['error' => 'Email atau Password salah']);
            }
        } else {
            return redirect()->to('/loginAdmin')->with(['error' => 'Email atau Password']);
        }
    }

    public function daftarAdmin()
    {
        return view('admin.daftarAdmin'); // view('folder.file', compact())
    }

    public function authDaftarAdmin(Request $request)
    {
        $this->validate($request, [
            'identifier' => 'required',
            'password' => 'required'
        ]);

        $identifier = $request->input('identifier');
        $password = $request->input('password');
        $hash_password = Hash::make($password);

        AdminModel::create([
            'username' => "Admin Butchery",
            'email' => $identifier,
            'password' => $hash_password
        ]);

        return redirect()->to('/loginAdmin');
    }

    public function adminProduk()
    {
        $produk = MitraProdukModel::all();
        $kategori = KategoriModel::all();

        return view('admin.adminProduk', ['produk' => $produk, 'kategori' => $kategori]); // view('folder.file', compact())
    }

    public function adminReviews()
    {
        $reviews = RReviewsModel::all();
        $data_user = [];
        foreach ($reviews as $r) {
            $user = KonsumensModel::find($r->id_user);
            $data_user[] = [
                'id_user' => $r->id_user,
                'nama_reviews' => $user->username
            ];
        }

        return view('admin.adminReviews', ['reviews' => $reviews, 'data_user' => $data_user]); // view('folder.file', compact())
    }

    public function deleteProdukByAdmin(Request $request)
    {
        $produk_id = $request->input('id_produk');

        $produk = MitraProdukModel::find($produk_id);

        $produk->delete();

        return redirect()->to('/adminProduk');
    }

    public function deleteRReviews(Request $request)
    {
        $rreviews_id = $request->input('id_rreviews');

        $produk = RReviewsModel::find($rreviews_id);

        $produk->delete();

        return redirect()->to('/adminReviews');
    }
}
