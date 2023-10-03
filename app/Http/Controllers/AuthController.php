<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel; // memanggil model dalam folder Models

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    private $idProvinsi, $idKota;

    public function getIdProvinsi(){
        return $this->idProvinsi;
    }
    public function getIdKota(){
        return $this->idKota;
    }

    public function setIdProvinsi($value){
        $this->idProvinsi = $value;
    }
    public function setIdKota($value){
        $this->idKota = $value;
    }

    public function login(): View
    {
        return view('login'); // view('folder.file', compact())
    }

    /**
     * register
     *
     * @return View
     */
    public function register(): View
    {
        return view('register');
    }

     /**
     * register_password
     *
     * @return View
     */
    public function register_password(): View
    {
        return view('register_password');
    }

    public function register_user()
    {
        $apiProvinsi = "https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json";

        $response = Http::get($apiProvinsi);

        $provinsiData = $response->json();

        $apiKota = "https://emsifa.github.io/api-wilayah-indonesia/api/regencies/".$this->getIdProvinsi().".json";

        $response2 = Http::get($apiKota);

        $kotaData = $response2->json();

        return view('register_user', ['provinsiData' => $provinsiData]);
    }

    public function register_userProv($idProv, $idKota)
    {
        $this->setIdProvinsi($idProv);
        $this->setIdKota($idKota);

        $apiProvinsi = "https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json";

        $response = Http::get($apiProvinsi);

        $provinsiData = $response->json();

        $apiKota = "https://emsifa.github.io/api-wilayah-indonesia/api/regencies/".$this->getIdProvinsi().".json";

        $response2 = Http::get($apiKota);

        $kotaData = $response2->json();       

        $apiKecamatan = "https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$this->getIdKota().".json";

        $response3 = Http::get($apiKecamatan);

        $kecamatanData = $response3->json();

        return view('register_user', ['provinsiData' => $provinsiData,'kotaData' => $kotaData, 'kecamatanData' => $kecamatanData]);
    }

    public function register_mitra()
    {
        return view('register_mitra');
    }

    public function forgetPassword(): View
    {
        return view('profile.forgetPassword');
    }

    public function profile(): View
    {
        return view('profile.profile');
    }

    public function save_register(Request $request){
        $this->validate($request,[
            'identifier' => 'required|nullable',
        ]);

        $identifier = $request->input('identifier');

        if(filter_var($identifier, FILTER_VALIDATE_EMAIL)){
            $email = $identifier;
            $request->session()->put('registration_data.email', $email);
            return redirect()->to('/register_password');
        }else{
            $no_hp = $identifier;
            $request->session()->put('registration_data.no_hp', $no_hp);
            return redirect()->to('/register_password');
        }
    }

  public function save_register2(Request $request){
        $this->validate($request,[
            'password' => 'required|string',
            'confirm_password' => 'required|same:password',
        ]);

        $password = $request->input('password');
        $hash_password= Hash::make($password);

        $request->session()->put('registration_data.password', $hash_password);
        return redirect()->to('/register_user');
    }
    public function save_register3(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'alamat.provinsi' => 'required',
            'alamat.kota' => 'required',
            'alamat.kecamatan' => 'required',
            'alamat.alamat' => 'required'
        ]);

        $username  = $request->input('username');
        $provinsi  = $request->input('alamat.provinsi');
        $kota  = $request->input('alamat.kota');
        $kecamatan  = $request->input('alamat.kecamatan');
        $alamat  = $request->input('alamat.alamat');

        $request->session()->put('registration_data.username', $username);
        $request->session()->put('registration_data.provinsi', $provinsi);
        $request->session()->put('registration_data.kota', $kota);
        $request->session()->put('registration_data.kecamatan', $kecamatan);
        $request->session()->put('registration_data.alamat', $alamat);
        
        return redirect()->to('/index');
  
    }

    public function store_register(Request $request){
        $registrationData = $request->session()->get('registration_data');
        
        $username = $registrationData['username'];
        $provinsi = $registrationData['provinsi'];
        $kota = $registrationData['kota'];
        $kecamatan = $registrationData['kecamatan'];
        $alamat = $registrationData['alamat'];
        $email = (isset($registrationData['email'])) ? $registrationData['email']: '' ;
        $no_hp = (isset($registrationData['no_hp'])) ? $registrationData['no_hp']: '';
        $password = $registrationData['password'];

        try {
            KonsumensModel::create([
                'username' => $username,
                'email' => $email, 
                'no_hp' => $no_hp, 
                'alamat' =>[
                        [
                            'provinsi' => $provinsi,
                            'kota/kab' => $kota,
                            'kecamatan' => $kecamatan,
                            'alamat' => $alamat
                        ]
                    ],
                'password' => $password
            ]);

            $request->session()->flush();
            return redirect()->to('/');
        } catch (\Exception $e) {
            $request->session()->flush(); // Hapus seluruh sesi jika gagal
            echo $e;
        }
    }

    public function getSession(Request $request){
        $registrationData = $request->session()->get('registration_data');
        var_dump($registrationData);
    }

    public function sessionDelete(Request $request){
        session()->flush();
    }

   
}