@extends('templates.register-layout')
@section('content')

<div class="w-full">
    <div class="container mx-auto px-[53px] mt-14">
        <a href="/index"><img src="{{asset('assets/img_index/asset/loginPage/logo.svg')}}" alt=""
                class="lg:w-fit md:w-fit sm:w-[50%]" /></a>
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
                    <div
                        class="lg:w-[65%] lg:h-[80%] md:w-[65%] md:h-[80%] sm:w-[100%] sm:h-[100%] sm:mt-5 bg-white rounded-lg shadow-lg text-center">
                        <p class="font-semibold lg:text-[24px] md:text-[24px] sm:text-[18px] lg:mt-14 sm:mt-5">
                            Hai! Daftar Dulu Ya
                        </p>
                        <p class="lg:pt-3 sm:pt-0 text-[#787878] sm:text-xs">
                            Udah punya akun?
                            <a href="/login" class="text-[#D10B05] font-medium hover:text-[#9F0804]">Masuk</a>
                            aja langsung
                        </p>
                        <form action="/save_register2" method="POST" class="lg:mt-9 sm:mt-5">
                            @csrf
                            <div class="relative">
                                <p class="text-start lg:ml-12 sm:ml-7 font-semibold sm:text-xs">
                                    Buat Kata Sandi
                                </p>
                                <input
                                    class="pr-10 lg:pl-5 sm:pl-2 lg:py-3 sm:py-2 mt-2 sm:text-xs border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                    type="password" name="password" id="password1" placeholder="" />
                                <button class="absolute lg:right-14 sm:right-8 btn-eye-close" form="none">
                                    <svg class="lg:mt-5 sm:mt-3 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 24 24">
                                        <path fill="#b3b3b3"
                                            d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                    </svg>
                                </button>
                                <button class="absolute lg:right-14 sm:right-8 btn-eye-open" form="none" hidden>
                                    <svg class="lg:mt-5 sm:mt-3 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 256 256">
                                        <path fill="#b3b3b3"
                                            d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                    </svg>
                                </button>
                                @error('password')
                                <p
                                    class="mt-2 ml-12 text-start text-sm sm:text-xs text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            <div class="relative lg:mt-8 sm:mt-4">
                                <p class="text-start lg:ml-12 sm:ml-7 font-semibold sm:text-xs">
                                    Konfirmasi kata sandi
                                </p>
                                <input
                                    class="pr-10 lg:pl-5 sm:pl-2 lg:py-3 sm:py-2 mt-2 sm:text-xs border-solid border-2 border-[#CCCCCC] rounded-lg w-[80%] focus:outline-[#D10B05]"
                                    type="password" name="confirm_password" id="password1" placeholder="" />

                                <button class="absolute lg:right-14 sm:right-8 btn-eye-close" form="none">
                                    <svg class="lg:mt-5 sm:mt-3 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 24 24">
                                        <path fill="#b3b3b3"
                                            d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54L2 5.27M12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.79 11.79 0 0 1-4 5.19l-1.42-1.43A9.862 9.862 0 0 0 20.82 12A9.821 9.821 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.821 9.821 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13Z" />
                                    </svg>
                                </button>
                                <button class="absolute lg:right-14 sm:right-8 btn-eye-open" form="none" hidden>
                                    <svg class="lg:mt-5 sm:mt-3 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 256 256">
                                        <path fill="#b3b3b3"
                                            d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z" />
                                    </svg>
                                </button>
                                @error('confirm_password')
                                <p
                                    class="mt-2 text-start ml-12 text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>

                            <button
                                class="text-white sm:text-xs bg-[#D10B05] lg:py-3 sm:py-2 lg:px-36 md:px-32 sm:px-[70px] rounded-lg font-semibold lg:my-16 sm:my-10 hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                                Selanjutnya
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- REGISTER -->

@endsection