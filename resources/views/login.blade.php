@extends('templates.register-layout')
@section('content')

<!-- LOGIN -->
<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt="" /></a>
        <div class="grid grid-cols-12">
            <div class="col-span-6 items-center flex justify-center">
                <div class="flex-none text-center lg:block md:hidden sm:hidden max-sm:hidden">
                    <img src="{{asset('assets/img_index/asset/loginPage/hiro.svg')}}" alt="" class="mt-12" />
                    <h1 class="font-semibold text-[28px] pt-9">
                        Selalu Ada Diskon Tiap Hari
                    </h1>
                    <p class="text-[#787878] pt-3">
                        Udah ga perlu keluar rumah, dapet diskon setiap hari lagi!
                    </p>
                </div>
            </div>
            <div class="lg:col-span-6 md:col-span-12 sm:col-span-12 lg:mt-0 md:mt-7">
                <div class="justify-center flex">
                    <div class="w-[65%] h-[80%] bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold text-[24px] mt-14">Halo! Masuk Yuk!</p>
                        <p class="pt-3">
                            Belum punya akun?
                            <a href="/register" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Daftar</a>
                            dulu ya.
                        </p>
                        <form action="/auth_system" method = "POST">
                            @csrf
                            <input
                                class="pl-5 py-3 mt-9 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                type="text" name="identifier" id="identifier" placeholder="No. Handphone/Email"/>
                                @if (session()->has('error'))
                                    <p
                                        class="mt-2 text-start ml-12 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                        {{session('error')}}
                                    </p>
                                @endif
                            <div class="relative mt-8">
                                <input
                                    class="pr-10 pl-5 py-3 mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                    type="password" name="password" id="password1" placeholder="Password"/>
                                <button class="absolute right-14 btn-eye-close" form="none">
                                    <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 24 24">
                                        <path fill="#b3b3b3"
                                            d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                    </svg>
                                </button>
                                <button class="absolute right-14 btn-eye-open" form="none" hidden>
                                    <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 256 256">
                                        <path fill="#b3b3b3"
                                            d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                    </svg>
                                </button>
                                @if (session()->has('error'))
                                <p
                                    class="mt-2 text-start ml-12 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                    {{session('error')}}
                                </p>
                            @endif
                            </div>
                            <p class="mt-3 text-end pr-11">
                                <a href="/forgetPassword" class="text-[#D10B05] mt-3 hover:text-[#9F0804]">Lupa
                                    Password</a>
                            </p>
                            <button type = "submit"
                                class="text-white bg-[#D10B05] py-3 lg:px-40 md:px-36 sm:px-28 rounded-lg font-semibold mt-8 hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                                Masuk
                            </button>
                            <div class="justify-center flex mt-6">
                                <img src="asset/loginPage/atau.svg" alt="" />
                            </div>
                        </form>
                        <div class="justify-center flex mb-10">
                            <form action="">
                                <button
                                    class="bg-white border-[#CCC] border-2 py-3 lg:px-[82px] md:px-16 sm:px-10 rounded-lg font-semibold mt-6 flex hover:bg-[#191C50] hover:text-white hover:border-[#191C50] transition-all duration-200 ease-linear">
                                    <img src="{{asset('assets/img_index/asset/loginPage/google.svg')}}" alt=""
                                        class="pr-3" />
                                    Masuk dengan Google
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN -->

@endsection