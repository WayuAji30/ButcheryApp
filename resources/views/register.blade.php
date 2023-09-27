@extends('templates.register-layout')
@section('content')
<!-- REGISTER -->
<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt="" /></a>
        <div class="grid grid-cols-12">
            <div class="col-span-6 items-center flex justify-center">
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
                    <div class="w-[65%] h-[80%] bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold text-[24px] mt-14">
                            Hai! Daftar Dulu Ya
                        </p>
                        <p class="pt-3 text-[#787878]">
                            Udah punya akun?
                            <a href="/login" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Masuk</a>
                            aja langsung
                        </p>
                        <form action="/">
                            <input
                                class="pl-5 py-3 mt-9 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                type="text" name="" id="" placeholder="No. Handphone/Email" required />
                            <p class="mt-2 text-[14px] pl-12 text-start">
                                <a href="" class="text-[#787878] mt-3">Contoh: email@butchery.com</a>
                            </p>
                            <button
                                class="text-white bg-[#D10B05] py-3 lg:px-40 md:px-36 sm:px-28 rounded-lg font-semibold mt-8 hover:bg-[#9F0804]">
                                Masuk
                            </button>
                            <div class="justify-center flex mt-6">
                                <img src="{{asset('assets/img_index/asset/loginPage/atau.svg')}}" alt="" />
                            </div>
                        </form>
                        <div class="justify-center flex">
                            <form action="">
                                <button
                                    class="bg-white border-[#CCC] border-2 py-3 lg:px-[82px] md:px-16 sm:px-10 rounded-lg font-semibold mt-6 flex hover:bg-[#191C50] hover:text-white hover:border-[#191C50]">
                                    <img src="{{asset('assets/img_index/asset/loginPage/google.svg')}}" alt=""
                                        class="pr-3" />
                                    Masuk dengan Google
                                </button>
                            </form>
                        </div>
                        <p class="text-[#B3B3B3] mt-5 mb-10">
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