@extends('templates.changePassword')
@section('content')

<!-- PROFILE -->
<div class="container mt-52">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center">
                <div class="bg-white rounded-md w-[80%] shadow-md">
                    <div class="flex justify-between items-center mt-7" id="logout">
                        <p class="">
                            <a href=""
                                class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium">Profil
                                Saya</a>
                        </p>
                        <button class="mr-5 transition-all duration-200 ease-in-out"><svg
                                xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                <path fill="#ccc"
                                    d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                            </svg></button>
                    </div>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <div class="grid grid-rows-1 grid-flow-col ml-20 mt-16">
                        <div class="row-span-3">
                            <form action="">
                                <button class="bg-white p-5 shadow-md rounded-md" id="profile-picture">
                                    <img src="{{asset('assets/img_index/asset/profile/avatar.svg')}}" alt="" />
                                </button>
                            </form>
                            <br />

                            <button
                                class="py-2 px-4 mt-11 border-2 border-[#D10B05] rounded-md text-[#D10B05] font-semibold w-[280px] hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out"
                                id="profile-change-password">
                                Ubah Kata Sandi
                            </button>


                            <button type="submit" id="submitEditProfile"
                                class="py-2 px-4 mt-5 border-2 border-[#ccc] bg-[#ccc] rounded-md text-white font-semibold w-[280px] hover:bg-[#D10B05] hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                                Simpan Perubahan
                            </button>

                        </div>
                        <div class="col-span-2 mt-5">
                            <form action="/edit_profile" method="POST" id="form_edit_profile">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{$user->_id}}">
                                <input type="hidden" name="idProv" id="idProv"
                                    value="{{$user['alamat'][0]['provinsi']}}">
                                <input type="hidden" name="idKota" id="idKota"
                                    value="{{$user['alamat'][0]['kota/kab']}}">
                                <input type="hidden" name="idKec" id="idKec"
                                    value="{{$user['alamat'][0]['kecamatan']}}">

                                <label for="username" class="font-semibold mr-6">Username</label>
                                <input type="text" placeholder="" name="username" id="username"
                                    value="{{$user->username}}"
                                    class="border-2 border-[#ccc] rounded-md w-[50%] py-3 px-4 focus:outline-[#D10B05]" />
                                <br />
                                <label for="email" class="font-semibold mr-6 ml-8">Email</label>
                                <input type="text" placeholder="rahmattahaluremik@gmail.com" name="email" id="email"
                                    value="{{(isset($user->email)) ? $user->email : ''}}"
                                    class="border-2 border-[#ccc] rounded-md w-[50%] py-3 px-4 mt-5 focus:outline-[#D10B05]" />
                                <br />
                                <label for="no.hp" class="font-semibold mr-5">Nomor HP</label>
                                <input type="text" placeholder="" id="no_hp" name="no_hp"
                                    value="{{(isset($user->no_hp)) ? $user->no_hp : ''}}"
                                    class="border-2 border-[#ccc] rounded-md w-[50%] py-3 px-4 mt-5 focus:outline-[#D10B05]" />
                                <br />
                                <div class="flex">
                                    <p class="font-semibold mt-5 ml-6 mr-6">
                                        Alamat
                                    </p>
                                    <div
                                        class="bg-white mt-5 rounded-md shadow-md w-[65%] border-2 border-slate-100 mb-20">
                                        <div class="mx-8">
                                            <p class="text-[#999] mt-8">
                                                Provinsi
                                            </p>
                                            <select name="provinsi" id="provinsi"
                                                class="px-3 py-4 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                                <option value="{{$provinsiData['id']}}">{{$provinsiData['name']}}"
                                                </option>
                                            </select>
                                            <div class="flex mt-4 lg:gap-16 md:gap-5 mb-5">
                                                <div class="flex-col">
                                                    <label for="kota" class="text-[#999]">Kota</label>
                                                    <select name="kota" id="kota"
                                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] focus:outline-[#D10B05]">
                                                        <option value="{{$kotaData['id']}}">{{$kotaData['name']}}"
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="flex-col">
                                                    <label for="kecamatan" class="text-[#999]">Kecamatan</label>
                                                    <select name="kecamatan" id="kecamatan"
                                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] focus:outline-[#D10B05]">
                                                        <option value="{{$kecData['id']}}">{{$kecData['name']}}"
                                                        </option>
                                                    </select><br />
                                                </div>
                                            </div>
                                            <label for="alamat" class="text-[#999]">Alamat Detail</label>
                                            <br />
                                            <input
                                                class="px-5 py-3 mt-3 mb-10 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] h-28 focus:outline-[#D10B05]"
                                                type="text" name="alamat" id="alamat" placeholder=""
                                                value="{{$user['alamat'][0]['alamat']}}" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="" id="ubahPassword" style="display: none;">
                                <p class="font-semibold text-[20px]">Kata Sandi Baru</p>
                                <p class="mt-3 text-[#999]">Ubah kata sandi anda dengan yang lebih kuat demi <br>
                                    keamanan akun anda dalam menggunakan Butchery.</p>
                                <input type="password" name="" id="" placeholder="Masukan Kata Sandi Baru" required
                                    class="border-b-2 border-[#e6e6e6] w-[50%] pr-4 mt-8 focus:border-[#D10B05] focus:outline-none" />
                                <p class="text-[12px] mt-2"><span class="text-[#ff4444]">*</span> Minimum 8 karakter</p>
                                <div class="relative flex items-center">
                                    <input type="password" name="" id="" placeholder="Masukan Kata Sandi Baru" required
                                        class="border-b-2 border-[#e6e6e6] w-[50%] pr-4 mt-8 focus:border-[#D10B05] focus:outline-none" />

                                    <button class="absolute right-[50%] btn-eye-close" form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="#b3b3b3"
                                                d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                        </svg>
                                    </button>
                                    <button class="absolute right-[50%] btn-eye-open" hidden form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 256 256">
                                            <path fill="#b3b3b3"
                                                d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-12 mb-20 flex">
                                    <button id="cancelButton2" form="none"
                                        class="bg-[#D10B05] rounded-md text-white px-16 py-2 mr-3 font-semibold hover:bg-[#9F0804]">
                                        Batal
                                    </button>
                                    <button id="saveButton"
                                        class="bg-[#ccc] rounded-md text-white px-16 py-2 font-semibold ">
                                        Simpan
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROFILE -->

@endsection