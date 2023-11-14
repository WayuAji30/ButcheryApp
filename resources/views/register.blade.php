@extends('templates.register-layout')
@section('content')
<!-- REGISTER -->
<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt=""
                class="lg:w-fit md:w-fit sm:w-[50%]" /></a>
        <div class="grid grid-cols-12">
            <div class="col-span-6 items-center flex justify-center">
                <div class="flex-none text-center lg:block hidden max-sm:hidden">
                    <img src="{{asset('assets/img_index/asset/loginPage/hiro2.svg')}}" alt="" class="mt-12" />
                    <h1 class="font-semibold text-[28px] pt-9">
                        Belanja Daging Anti Ribet
                    </h1>
                    <p class="text-[#787878] pt-3">
                        Beli daging gapake keluar rumah? emang boleh sesimpel itu?
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6 col-span-12 lg:mt-0 md:mt-7">
                <div class="justify-center flex">
                    <div
                        class="lg:w-[65%] lg:h-[80%] md:w-[65%] md:h-[80%] sm:w-[100%] sm:h-[100%] sm:mt-5 bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold lg:text-[24px] md:text-[24px] sm:text-[18px] lg:mt-14 sm:mt-5">
                            Hai! Daftar Dulu Ya
                        </p>
                        <p class="lg:pt-3 text-[#787878] lg:text-base md:text-base sm:text-[12px]">
                            Udah punya akun?
                            <a href="/login" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Masuk</a>
                            aja langsung
                        </p>
                        <form action="/save_register" method="POST">
                            @csrf
                            <input
                                class="lg:pl-5 pl-3 lg:py-3 md:py-3 py-2 lg:mt-9 mt-5 border-solid border-2 border-[#CCCCCC] sm:text-xs rounded-lg w-[80%] focus:outline-[#D10B05]"
                                type="text" name="identifier" id="" placeholder="No. Handphone/Email" />
                            <p
                                class="lg:mt-2 mt-1 lg:text-[14px] md:text-[14px] sm:text-[10px] lg:pl-12 md:pl-12 sm:pl-7 text-start">
                                <a class="text-[#787878] lg:mt-3">Contoh: email@butchery.com</a>
                            </p>
                            @error('identifier')
                            <span
                                class="mt-2 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </span>
                            @enderror
                            <button
                                class="button-submit2 text-white bg-[#D10B05] lg:py-3 md:py-3 py-2 lg:px-36 md:px-32 md:mt-8 px-[80px] lg:text-base md:text-base sm:text-xs rounded-lg font-semibold lg:mt-8 sm:mt-5 hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                                Selanjutnya
                            </button>
                            <div class="justify-center flex mt-6">
                                <img src="{{asset('assets/img_index/asset/loginPage/atau.svg')}}" alt="" />
                            </div>
                        </form>
                        <div class="justify-center flex">
                            <form action="">
                                <button
                                    class="button bg-white border-[#CCC] border-2 lg:py-3 py-2 lg:px-[82px] md:px-16 sm:px-4 rounded-lg font-semibold mt-6 lg:text-base md:text-base sm:text-xs flex items-center  hover:border-[#d10b05] hover:text-[#d10b05] transition-all duration-200 ease-linear">
                                    <img src="{{asset('assets/img_index/asset/loginPage/google.svg')}}" alt=""
                                        class="lg:pr-3 pr-2 sm:w-6" />
                                    Masuk dengan Google
                                </button>
                            </form>
                        </div>
                        <p class="text-[#B3B3B3] lg:text-base text-xs mt-5 mb-10">
                            Dengan mendaftar, saya menyetujui <br />
                            <a href="" class="text-[#D10B05]">Syarat dan Ketentuan</a>
                            serta
                            <a href="" class="text-[#D10B05]">Kebijakan Privasi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REGISTER -->
@endsection