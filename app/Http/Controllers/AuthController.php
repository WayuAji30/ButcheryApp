<?php

namespace App\Http\Controllers;


use App\Models\KonsumensModel;
use App\Models\SuppliersModel;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


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

    public function auth_system(Request $request){
        $this->validate($request,[
            'identifier' => 'required',
            'password' => 'required'
        ]);

        $identifier = $request->input('identifier');
        $password = $request->input('password');

        $idn = KonsumensModel::where('email',$identifier)->orWhere('no_hp',$identifier)->first();

        if($idn){
            if(Hash::check($password, $idn->password)){
                if($idn->role == 'supplier'){
                    $supplier = SuppliersModel::where('email', $idn->email)->orWhere('no_hp', $idn->no_hp)->first();
                    session(['login' => true,'id_user' => $idn->_id, 'id_supplier' => $supplier->_id ,'provinsi_id' => $idn['alamat'][0]['provinsi'], 'kota_id' => $idn['alamat'][0]['kota/kab'], 'kecamatan_id' => $idn['alamat'][0]['kecamatan']]);
                }
                session(['login' => true,'id_user' => $idn->_id, 'provinsi_id' => $idn['alamat'][0]['provinsi'], 'kota_id' => $idn['alamat'][0]['kota/kab'], 'kecamatan_id' => $idn['alamat'][0]['kecamatan']]);
                return redirect()->to('/');
            }else{
                return redirect()->to('/login')->with(['error' => 'No. Handphone/Email atau Password salah']);
            }
        }else{
            return redirect()->to('/login')->with(['error' => 'No. Handphone/Email atau Password']);
        }
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
        return view('register_user');
    }
    
    public function register_mitra($id)
    {
        $user = KonsumensModel::find($id);

        return view('register_mitra', ['user' => $user]);
    }

    public function store_register_mitra(Request $request){
        $request->validate([
            'nama_toko' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'no_wa' => 'required',
            'norek' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required'
        ]);

        $user_id = $request->input('id');
        $nama_toko = $request->input('nama_toko');
        $email = $request->input('email');
        $no_telp = $request->input('no_telp');
        $no_wa = $request->input('no_wa');
        $no_rekening = $request->input('norek');
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');
        $kecamatan = $request->input('kecamatan');
        $alamat = $request->input('alamat');

       $user_supplier =  SuppliersModel::create([
            'user_id' => $user_id,
            'nama_toko' => $nama_toko,
            'email'=> $email,
            'no_hp'=> $no_telp,
            'no_wa'=> $no_wa,
            'no_rekening'=> $no_rekening,
            'alamat' => [
                [
                'provinsi' => $provinsi,
                'kota' => $kota,
                'kecamatan' => $kecamatan,
                'alamat' => $alamat,
                ]
            ]
        ]);

        echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>';
        echo '<script> $(document).ready(function(){localStorage.clear();window.location.href = "/updateUser/'.$user_id.'/'.$no_telp.'/'.$email.'";}); </script>';
    }

    public function updateUser($id, $no_telp, $email){
       $user = KonsumensModel::find($id);

       KonsumensModel::where('_id',$user->_id)->update([
        'email' => $email,
        'no_hp' => $no_telp,
        'role' => 'supplier'
       ]);

       return redirect()->to('/');
    }

    public function forgetPassword(): View
    {
        return view('profile.forgetPassword');
    }

    public function profile($id, $idProv, $idKota,$idKec)
    {
        $user = KonsumensModel::find($id);
        $provinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/province/'.$idProv.'.json');
        $response = $provinsi->json();
        $kota = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regency/'.$idKota.'.json');
        $response2 = $kota->json();
        $kecamatan = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/district/'.$idKec.'.json');
        $response3 = $kecamatan->json();

        return view('profile.profile',['user' => $user, 'provinsiData' => $response,'kotaData' => $response2, 'kecData' => $response3]);
    }

    public function edit_profile(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required'
        ]);
        
        //upload image
        //$image1 = $request->file('foto.foto1');
        
        //upload image2
        //$image2 = $request->file('foto.foto2');

        //upload image3
        //$image3 = $request->file('foto.foto3');

        $id = $request->input('id');
        $idProv = $request->input('idProv');
        $idKota = $request->input('idKota');
        $idKec = $request->input('idKec');
        $username = $request->input('username');
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');
        $kecamatan = $request->input('kecamatan');
        $alamat = $request->input('alamat');

        KonsumensModel::where('_id', $id)->update([
            'username' => $username,
            'email' => $email,
            'no_hp' => $no_hp,
            'alamat' => [
                [
                    'provinsi' => $provinsi,
                    'kota/kab' => $kota,
                    'kecamatan' => $kecamatan,
                    'alamat' => $alamat,
                ]
            ]
        ]);

        session()->forget(['provinsi_id','kota_id','kecamatan_id']);
        session(['provinsi_id' => $idProv, 'kota_id' => $idKota, 'kecamatan_id' => $idKec]);
        return redirect()->to('/profile'.'/'. $id .'/'.$provinsi.'/'.$kota.'/'.$kecamatan);
    }

    public function ubah_password(Request $request){
        $this->validate($request,[
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $id = $request->input('id');
        $idProv = $request->input('idProv');
        $idKota = $request->input('idKota');
        $idKec = $request->input('idKec');

        $password = $request->input('password');
        $hash_password= Hash::make($password);
        
        KonsumensModel::where('_id', $id)->update([
          'password' => $hash_password
        ]);
        
        return redirect()->to('/profile'.'/'. $id .'/'.$idProv.'/'.$idKota.'/'.$idKec);
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
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required'
        ]);

        $username  = $request->input('username');
        $provinsi  = $request->input('provinsi');
        $kota  = $request->input('kota');
        $kecamatan  = $request->input('kecamatan');
        $alamat  = $request->input('alamat');

        $request->session()->put('registration_data.username', $username);
        $request->session()->put('registration_data.provinsi', $provinsi);
        $request->session()->put('registration_data.kota', $kota);
        $request->session()->put('registration_data.kecamatan', $kecamatan);
        $request->session()->put('registration_data.alamat', $alamat);
        
        return redirect()->to('/store_register');
  
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
        $role = 'konsumen';

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
                'password' => $password,
                'role' => $role
            ]);

            $request->session()->flush();
            echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin=
            "anonymous"></script>';
            echo '<script> $(document).ready(function(){localStorage.clear();window.location.href = "/login";}); </script>';
        } catch (\Exception $e) {
            $request->session()->flush(); // Hapus seluruh sesi jika gagal
            echo $e;
        }
    }

    public function getSession(Request $request){
        $registrationData = $request->session()->get('registration_data');
        $idData = $request->session()->get('id_user');
        $idSup = $request->session()->get('id_supplier');
        $prov = $request->session()->get('provinsi_id');
        $kota = $request->session()->get('kota_id');
        $kecamatan = $request->session()->get('kecamatan_id');
        var_dump([$registrationData,$idData,$idSup,$prov,$kota,$kecamatan]);
    }

    public function logout(){
        session()->flush();
        return redirect()->to('/');
    }

   
}