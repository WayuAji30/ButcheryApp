@extends('templates.changePassword')
@section('content')

<!-- PROFILE -->
<div class="container lg:pt-52 pt-20">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center md:mx-4">
                <div class="bg-white rounded-md lg:w-[80%] w-full shadow-md">
                    <div class="mt-7" id="logout">
                        <p class="">
                            <a class="text-[#D10B05] text-[20px] pb-4 px-11 sm:px-4 sm:text-base border-b-4 border-[#D10B05] font-medium cursor-default">Profil
                                Saya</a>
                        </p>
                    </div>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <div class="grid lg:grid-flow-col grid-flow-row lg:ml-20 lg:mt-16 mt-5">
                        <div class="row-span-3">
                            <form action="" class="md:text-center sm:text-center">
                                <button class="bg-white p-5 shadow-md rounded-md cursor-default" id="profile-picture" form="none">
                                    <img src="{{asset('assets/img_index/asset/profile/avatar.svg')}}" alt="" class="sm:w-32" />
                                </button>
                            </form>
                            <br />
                            <div class="md:flex md:justify-center md:gap-5">
                                <button class="py-2 px-4 lg:mt-11 mt-5 sm:ml-10 border-2 border-[#D10B05] rounded-md text-[#D10B05] font-semibold w-[280px] hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out" id="profile-change-password">
                                    Ubah Kata Sandi
                                </button>

                                <button type="submit" id="submitEditProfile" disabled class="py-2 px-4 mt-5 sm:ml-10 border-2 border-[#ccc] bg-[#ccc] rounded-md text-white font-semibold w-[280px] transition-all duration-200 ease-in-out">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-14 md:ml-24">
                            <form action="/edit_profile" method="POST" id="form_edit_profile">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{$user->_id}}">
                                <input type="hidden" name="idProv" id="idProv" value="{{$user['alamat'][0]['provinsi']}}">
                                <input type="hidden" name="idKota" id="idKota" value="{{$user['alamat'][0]['kota/kab']}}">
                                <input type="hidden" name="idKec" id="idKec" value="{{$user['alamat'][0]['kecamatan']}}">

                                <label for="username" class="font-semibold mr-6 sm:ml-3">Username</label> <br class="sm:block hidden">
                                <input type="text" placeholder="" name="username" id="username" value="{{$user->username}}" class="sm:ml-3 border-2 border-[#ccc] rounded-md w-[50%] sm:w-[90%] py-3 px-4 focus:outline-[#D10B05]" />
                                <br />
                                <label for="email" class="font-semibold mr-6 ml-8 sm:ml-3">Email</label><br class="sm:block hidden">
                                <input type="text" placeholder="rahmattahaluremik@gmail.com" name="email" id="email" value="{{(isset($user->email)) ? $user->email : ''}}" class="sm:ml-3 border-2 border-[#ccc] rounded-md w-[50%] sm:w-[90%] py-3 px-4 mt-5 focus:outline-[#D10B05]" />
                                <br />
                                <label for="no.hp" class="font-semibold mr-5 sm:ml-3">Nomor HP</label><br class="sm:block hidden">
                                <input type="text" placeholder="" id="no_hp" name="no_hp" value="{{(isset($user->no_hp)) ? $user->no_hp : ''}}" class="sm:ml-3 border-2 border-[#ccc] rounded-md w-[50%] sm:w-[90%] py-3 px-4 mt-5 focus:outline-[#D10B05]" />
                                <br />
                                <div class="flex sm:flex-col">
                                    <p class="font-semibold mt-5 ml-5 sm:ml-4 mr-6">
                                        Alamat
                                    </p>
                                    <div class="bg-white mt-5 sm:mt-0 rounded-md shadow-md w-[65%] sm:w-full sm:shadow-none sm:border-none border-2 border-slate-100 mb-20 sm:mb-5">
                                        <div class="mx-8 sm:mx-4">
                                            <p class="text-[#999] mt-8 sm:mt-2">
                                                Provinsi
                                            </p>
                                            <select name="provinsi" id="provinsi" class="px-3 py-4 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                                <option value="{{$provinsiData['id']}}">{{$provinsiData['name']}}
                                                </option>
                                            </select>
                                            <div class="flex mt-4 lg:gap-12 md:gap-5 sm:gap-3 mb-5">
                                                <div class="flex-col">
                                                    <label for="kota" class="text-[#999]">Kota</label>
                                                    <select name="kota" id="kota" class="pl-5 sm:pl-2 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] sm:w-[160px] focus:outline-[#D10B05]">
                                                        <option value="{{$kotaData['id']}}">{{$kotaData['name']}}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="flex-col">
                                                    <label for="kecamatan" class="text-[#999]">Kecamatan</label>
                                                    <select name="kecamatan" id="kecamatan" class="pl-5 sm:pl-2 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] sm:w-[160px] focus:outline-[#D10B05]">
                                                        <option value="{{$kecData['id']}}">{{$kecData['name']}}
                                                        </option>
                                                    </select><br />
                                                </div>
                                            </div>
                                            <label for="alamat" class="text-[#999]">Alamat Detail</label>
                                            <br />
                                            <textarea class="peer block min-h-[auto] w-full mt-3 mb-5 rounded-lg border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary focus:border-[#D10B05] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="alamat" name="alamat" rows="4" value="">{{$user['alamat'][0]['alamat']}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="/ubah_Password" method="POST" id="ubahPassword" style="display: none;" class="md:ml-24">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{$user->_id}}">
                                <input type="hidden" name="idProv" id="idProv" value="{{$user['alamat'][0]['provinsi']}}">
                                <input type="hidden" name="idKota" id="idKota" value="{{$user['alamat'][0]['kota/kab']}}">
                                <input type="hidden" name="idKec" id="idKec" value="{{$user['alamat'][0]['kecamatan']}}">

                                <p class="font-semibold text-[20px] sm:ml-4">Kata Sandi Baru</p>
                                <p class="mt-3 text-[#999] sm:mx-4">Ubah kata sandi anda dengan yang lebih kuat demi
                                    <br class="sm:hidden block">
                                    keamanan akun anda dalam menggunakan Butchery.
                                </p>
                                <div class="relative flex items-center sm:mx-4">
                                    <input type="password" name="password" id="password" placeholder="Konfirmasi Kata Sandi Baru" class="border-b-2 border-[#e6e6e6] w-[50%] sm:w-full pr-4 mt-8 focus:border-[#D10B05] focus:outline-none" />

                                    <button class="absolute right-[50%] sm:right-3 btn-eye-close" form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                            <path fill="#b3b3b3" d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                        </svg>
                                    </button>
                                    <button class="absolute right-[50%] sm:right-3 btn-eye-open" hidden form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 256 256">
                                            <path fill="#b3b3b3" d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                        </svg>
                                    </button>
                                    @error('password')
                                    <script>
                                        alert('{{$message}}');
                                    </script>
                                    @enderror
                                </div>
                                <p class="text-[12px] mt-2 sm:ml-4"><span class="text-[#ff4444]">*</span> Minimum 8
                                    karakter</p>
                                <div class="relative flex items-center sm:mx-4">
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Kata Sandi Baru" class="border-b-2 border-[#e6e6e6] w-[50%] sm:w-full pr-4 mt-8 focus:border-[#D10B05] focus:outline-none" />

                                    <button class="absolute right-[50%] sm:right-3 btn-eye-close" form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                            <path fill="#b3b3b3" d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                        </svg>
                                    </button>
                                    <button class="absolute right-[50%] sm:right-3 btn-eye-open" hidden form="none">
                                        <svg class="mt-6" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 256 256">
                                            <path fill="#b3b3b3" d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                        </svg>
                                    </button>
                                    @error('confirm_password')
                                    <script>
                                        alert('{{$message}}');
                                    </script>
                                    @enderror
                                </div>

                                <div class="mt-12 mb-20 sm:mb-10 flex sm:justify-end sm:mr-4">
                                    <button id="cancelButton2" form="none" class="bg-[#D10B05] rounded-md text-white px-16 sm:px-10 py-2 mr-3 font-semibold hover:bg-[#9F0804]">
                                        Batal
                                    </button>
                                    <button id="saveButton" class="bg-[#ccc] rounded-md text-white px-16 sm:px-8 py-2 font-semibold">
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