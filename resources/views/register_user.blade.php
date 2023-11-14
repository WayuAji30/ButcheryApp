@extends('templates.register-layout')
@section('content')

<!-- REGISTER -->
<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt="" class="lg:w-fit md:w-fit sm:w-[50%]"></a>
        <div class="grid grid-cols-12">
            <div class="col-span-6 flex justify-center">
                <div class="flex-none text-center lg:block md:hidden sm:hidden max-sm:hidden">
                    <img src="{{asset('assets/img_index/asset/loginPage/hiro2.svg')}}" alt="" class="mt-12" />
                    <h1 class="font-semibold text-[28px] pt-9">
                        Belanja Daging Anti Ribet
                    </h1>
                    <p class="text-[#787878] pt-3">
                        Beli daging gapake keluar rumah? emang boleh sesimpel itu?
                    </p>
                </div>
            </div>
            <div class="lg:col-span-6 md:col-span-12 sm:col-span-12 lg:mt-0 md:mt-7">
                <div class="justify-center flex">
                    <div class="lg:w-[65%] lg:h-[80%] md:w-[65%] md:h-[80%] sm:w-[100%] sm:h-[100%] sm:mt-5  bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold lg:text-[24px] md:text-[24px] sm:text-[18px] lg:mt-14 sm:mt-5">
                            Hai! Daftar Dulu Ya
                        </p>
                        <p class="lg:pt-3 sm:pt-0 text-[#787878] sm:text-xs">
                            Udah punya akun?
                            <a href="/login" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Masuk</a>
                            aja langsung
                        </p>
                        <form action="/save_register3" method="POST" class="lg:mt-9 mt-5">
                            @csrf
                            <label for="username" class="flex justify-start lg:ml-12 md:ml-11 sm:ml-7 sm:text-xs font-semibold">Masukan
                                Username</label>
                            <input class="lg:pl-5 pl-2 lg:py-3 py-2 mt-2 sm:text-xs border-solid border-2 transition-all duration-200 ease-linear border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]" type="text" name="username" id="username" placeholder="" />
                            @error('username')
                            <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </span>
                            @enderror
                            <p class="font-semibold lg:mt-8 md:mt-6 sm:mt-5 lg:ml-12 md:ml-11 sm:ml-7 sm:text-xs text-start">
                                Masukan Alamat Toko
                            </p>
                            <p class="text-[#787878] text-start lg:ml-12 md:ml-11 sm:ml-7 sm:text-xs lg:mt-4 md:mt-3 sm:mt-2">
                                Provinsi
                            </p>
                            <select name="provinsi" id="provinsi" class="lg:pl-5 pl-2 lg:py-3 py-2 sm:text-xs border-solid border-2 mt-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]">
                                <option value="">Pilih Provinsi</option>
                            </select>
                            @error('provinsi')
                            <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </span>
                            @enderror
                            <br />
                            <div class="lg:flex lg:mt-4 md:mt-3 sm:mt-2 justify-center gap-5 lg:ml-0 md:ml-11 sm:pl-7 mb-5">
                                <div class="flex-col text-start sm:text-xs">
                                    <label for="kota" class="text-[#787878]">Kota</label> <br>
                                    <select name="kota" id="kota" class="lg:pl-5 pl-2 lg:py-3 py-2 lg:mt-3 mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[170px] md:w-[89%] sm:w-[90%] focus:outline-[#D10B05]">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                    @error('kota')
                                    <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="flex-col text-start sm:text-xs md:mt-3 sm:mt-3">
                                    <label for="kecamatan" class="text-[#787878]">Kecamatan</label> <br>
                                    <select name="kecamatan" id="kecamatan" class="lg:pl-5 pl-2 lg:py-3 py-2 lg:mt-3 mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[170px] md:w-[89%] sm:w-[90%] focus:outline-[#D10B05]">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    @error('kecamatan')
                                    <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <p class="text-[#787878] text-start lg:ml-12 md:ml-11 sm:ml-7 sm:text-xs">Alamat Detail</p>
                            <textarea class="peer block min-h-[auto] sm:text-xs mx-auto my-auto w-[80%] mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" id="alamat" name="alamat" rows="4"></textarea>
                            @error('alamat')
                            <span class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </span>
                            @enderror
                            <p class="text-[#B3B3B3] sm:text-xs">
                                Dengan mendaftar, saya menyetujui <br />
                                <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                                    Syarat dan Ketentuan</a>
                                serta
                                <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                                    Kebijakan Privasi</a>
                            </p>
                            <button type="submit" class="button-submit text-white sm:text-xs bg-[#D10B05] lg:py-3 py-2 lg:px-40 md:px-36 sm:px-20 rounded-lg font-semibold my-10 hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REGISTER -->
@endsection