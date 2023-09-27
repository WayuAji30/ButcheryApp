@extends('templates.changePassword')
@section('content')

<!-- PROFILE -->
<div class="container mt-52">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center">
                <div class="bg-white rounded-md w-[80%] shadow-md">
                    <p class="mt-7">
                        <a href=""
                            class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium">Profil
                            Saya</a>
                    </p>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <div class="grid grid-rows-1 grid-flow-col ml-20 mt-16">
                        <div class="row-span-3">
                            <form action="">
                                <button class="bg-white p-5 shadow-md rounded-md">
                                    <img src="{{asset('assets/img_index/asset/profile/avatar.svg')}}" alt="" />
                                </button>
                            </form>
                            <br />
                            <form action="">
                                <button
                                    class="py-2 px-4 mt-11 border-2 border-[#D10B05] rounded-md text-[#D10B05] font-semibold w-[80%] hover:bg-[#D10B05] hover:text-white">
                                    Ubah Kata Sandi
                                </button>
                            </form>
                            <form action="../index.html">
                                <button
                                    class="py-2 px-4 mt-5 border-2 border-[#ccc] bg-[#ccc] rounded-md text-white font-semibold w-[80%] hover:bg-[#D10B05] hover:border-[#D10B05]">
                                    Simpan Perubahan
                                </button>
                            </form>
                        </div>
                        <div class="col-span-2 mt-5">
                            <form action="">
                                <label for="username" name="" class="font-semibold mr-6">Username</label>
                                <input type="text" placeholder="Rahmat Tahalu" id="username"
                                    class="border-2 border-[#ccc] rounded-md w-[50%] py-3 px-4 focus:outline-[#D10B05]" />
                                <br />
                                <label for="email" name="" class="font-semibold mr-6 ml-8">Email</label>
                                <input type="email" placeholder="rahmattahaluremik@gmail.com" id="email"
                                    class="border-2 border-[#ccc] rounded-md w-[50%] py-3 px-4 mt-5 focus:outline-[#D10B05]" />
                                <br />
                                <label for="no.hp" name="" class="font-semibold mr-5">Nomor HP</label>
                                <input type="text" placeholder="08187655617718" id="no.hp"
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
                                            <select name="" id="Kategori"
                                                class="px-3 py-4 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                                <option value="">
                                                    Jawa Barat
                                                </option>
                                                <option value="">
                                                    Jawa Tengah
                                                </option>
                                                <option value="">
                                                    Jawa Timur
                                                </option>
                                            </select>
                                            <div class="flex mt-4 lg:gap-16 md:gap-5 mb-5">
                                                <div class="flex-col">
                                                    <label for="kota" class="text-[#999]">Kota</label>
                                                    <select name="" id="kota"
                                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[120%] focus:outline-[#D10B05]">
                                                        <option value="">
                                                            Bojong Gede
                                                        </option>
                                                        <option value="">
                                                            Jawa Barat
                                                        </option>
                                                        <option value="">
                                                            Jawa Tengah
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="flex-col">
                                                    <label for="kecamatan" class="text-[#999]">Kecamatan</label>
                                                    <select name="" id="kecamatan"
                                                        class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                                        <option value="">
                                                            Gambir
                                                        </option>
                                                        <option value="">
                                                            Jawa Barat
                                                        </option>
                                                        <option value="">
                                                            Jawa Tengah
                                                        </option>
                                                    </select><br />
                                                </div>
                                            </div>
                                            <label for="alamat" class="text-[#999]">Alamat Detail</label>
                                            <br />
                                            <input
                                                class="px-5 py-3 mt-3 mb-10 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] h-28 focus:outline-[#D10B05]"
                                                type="text" name="" id="alamat" placeholder="" />
                                        </div>
                                    </div>
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