@extends('templates.layout')
@section('content')

<?php

use App\Models\SuppliersModel;

$supplier = SuppliersModel::where('user_id', session('id_user'))->first();

?>

<!-- Hiro -->
<div class="lg:pt-[201px] md:pt-[80px] pt-[70px] lg:px-12 w-full">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-8 sm:col-span-12 mx-auto">
                <div class="flex justify-between relative items-center group">
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div
                            class="splide__arrows lg:block sm:hidden opacity-0 group-hover:opacity-100 transition-all duration-200 ease-in-out">
                            <button class="splide__arrow splide__arrow--prev">
                                <img src="{{asset('assets/img_index/asset/hiro/left.svg')}}" alt="" />
                            </button>
                            <button class="splide__arrow splide__arrow--next">
                                <img src="{{asset('assets/img_index/asset/hiro/right.svg')}}" alt="" />
                            </button>
                        </div>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{asset('assets/img_index/asset/hiro/iklan/big.svg')}}" alt="" />
                                </li>
                                <li class="splide__slide">
                                    <img src="{{asset('assets/img_index/asset/hiro/iklan/carosel2.svg')}}" alt="" />
                                </li>
                                <li class="splide__slide">
                                    <img src="{{asset('assets/img_index/asset/hiro/iklan/carosel3.svg')}}" alt="" />
                                </li>
                                <li class="splide__slide">
                                    <img src="{{asset('assets/img_index/asset/hiro/iklan/carosel4.svg')}}" alt="" />
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-span-4">
                <img src="{{asset('assets/img_index/asset/hiro/iklan/carosel1.svg')}}" alt=""
                    class="lg:mb-2 sm:mb-[3px] w-full lg:block md:block hidden" />

                <img src="{{asset('assets/img_index/asset/hiro/iklan/smallDown.svg')}}" alt=""
                    class="w-full lg:block md:block hidden" />
            </div>
        </div>
    </div>
</div>
<!-- Hiro -->

<!-- Fitur -->
<div class="w-full lg:mt-16 sm:mt-3" id="fitur">
    <div class="container mx-auto lg:block md:hidden sm:hidden">
        <div class="grid grid-cols-12 lg:mx-14 md:mx-14">
            <div class="lg:col-span-6 md:col-span-12 sm:col-span-12 lg:gap-14 md:gap-14 flex">
                <!-- 1 -->
                <form action="">
                    <button
                        class="px-3 py-[5px] rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 ml-6" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 256 256">
                            <path fill="#d10b05"
                                d="M232 88.86V56a16 16 0 0 0-16-16H40a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h112v24a8 8 0 0 0 11.58 7.16L192 216.94l28.42 14.22A8 8 0 0 0 232 224v-56.86a55.87 55.87 0 0 0 0-78.28ZM128 144H72a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16Zm0-32H72a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16Zm88 99.06l-20.42-10.22a8 8 0 0 0-7.16 0L168 211.06v-32.47a55.94 55.94 0 0 0 48 0ZM192 168a40 40 0 1 1 40-40a40 40 0 0 1-40 40Z">
                            </path>
                        </svg> Bersertifikat
                    </button>
                </form>
                <!-- 2 -->
                <form action="">
                    <button
                        class="py-[5px] px-6 rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 ml-5" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 24 24">
                            <path fill="#d10b05" fill-rule="evenodd"
                                d="m16.137 4.728l1.83 1.83C20.655 9.248 22 10.592 22 12.262c0 1.671-1.345 3.015-4.034 5.704C15.277 20.657 13.933 22 12.262 22c-1.67 0-3.015-1.345-5.704-4.034l-1.83-1.83c-1.545-1.545-2.318-2.317-2.605-3.32c-.288-1.003-.042-2.068.45-4.197l.283-1.228c.413-1.792.62-2.688 1.233-3.302c.614-.613 1.51-.82 3.302-1.233l1.228-.284c2.13-.491 3.194-.737 4.197-.45c1.003.288 1.775 1.061 3.32 2.606Zm-4.99 9.6c-.673-.672-.668-1.638-.265-2.403a.75.75 0 0 1 1.04-1.046c.34-.18.713-.276 1.085-.272a.75.75 0 0 1-.014 1.5a.88.88 0 0 0-.609.277c-.387.387-.286.775-.177.884c.11.109.497.21.884-.177c.784-.784 2.138-1.044 3.005-.177c.673.673.668 1.639.265 2.404a.75.75 0 0 1-1.04 1.045a2.201 2.201 0 0 1-1.472.232a.75.75 0 1 1 .302-1.47c.177.037.463-.021.708-.266c.387-.388.286-.775.177-.884c-.11-.109-.497-.21-.884.177c-.784.784-2.138 1.044-3.005.176Zm-1.126-4.035a2 2 0 1 0-2.829-2.828a2 2 0 0 0 2.829 2.828Z"
                                clip-rule="evenodd" />
                        </svg>20 Ribuan
                    </button>
                </form>
                <!-- 3 -->
                <form action="">
                    <button
                        class="px-5 py-[5px] rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 ml-6" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 24 24">
                            <path fill="#d10b05"
                                d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2H4m11.5 3L17 8.5L8.5 17L7 15.5L15.5 7m-6.69.04c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77m6.38 6.38c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77Z" />
                        </svg>Lagi Promo
                    </button>
                </form>
                <!-- 4 -->
                <form action="">
                    <button
                        class="px-3 py-[5px] rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 ml-8" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 24 24">
                            <path fill="#d10b05"
                                d="M20.16 12.73A6.27 6.27 0 0 0 19.09 3c-2.01-1.33-4.7-1.34-6.73-.03c-1.76 1.13-2.73 2.89-2.9 4.71c-.13 1.32-.63 2.55-1.55 3.47l-.03.03c-1.16 1.16-1.16 2.93-.07 4.01l.99.99a2.794 2.794 0 0 0 3.95 0c.97-.97 2.25-1.5 3.64-1.65c1.37-.15 2.71-.75 3.77-1.8m-13.9 7.13c.27.56.18 1.24-.29 1.7a1.49 1.49 0 0 1-2.55-.98a1.49 1.49 0 0 1-.98-2.55c.46-.46 1.15-.56 1.7-.29l2.48-2.43c.14.19.3.41.48.59l.99.99c.21.2.41.37.67.52l-2.5 2.45Z" />
                        </svg>Daging Impor
                    </button>
                </form>
            </div>
            <div class="lg:col-span-6 md:col-span-12 sm:col-span-12 lg:gap-14 md:gap-2 flex">
                <!-- 5 -->
                <form action="">
                    <button
                        class="px-3 py-[5px] lg:mr-0 sm:mr-3 rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 lg:ml-11 md:ml-10 sm:ml-4" xmlns="http://www.w3.org/2000/svg" width="40"
                            height="40" viewBox="0 0 24 24">
                            <path fill="#d10b05"
                                d="m9.675 13.7l.875-2.85L8.25 9h2.85l.9-2.8l.9 2.8h2.85l-2.325 1.85l.875 2.85l-2.3-1.775L9.675 13.7ZM6 23v-7.725q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2q3.35 0 5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275V23l-6-2l-6 2Zm6-7q2.5 0 4.25-1.75T18 10q0-2.5-1.75-4.25T12 4Q9.5 4 7.75 5.75T6 10q0 2.5 1.75 4.25T12 16Z" />
                        </svg>Daging Premium
                    </button>
                </form>
                <!-- 6 -->
                <form action="">
                    <button
                        class="px-8 py-[5px] lg:mr-0 md:mr-9 sm:mr-0 rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 ml-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 512 512">
                            <path fill="#d10b05"
                                d="M335.45 256a214.83 214.83 0 0 1 29.08-108l7.62-13.26a280.69 280.69 0 0 0-48.64-7.15c-21.94-16.9-54.64-36.95-92.34-43.33L208 80l13.37 61.86c-41.67 14.14-78.43 42.86-102.76 62.62q-7.06-5.91-14.78-11.55c-39.71-29-82.6-31.8-84.4-31.9L0 160l2.67 19.31c.29 2 6.79 44.73 31.65 76.52C9.46 287.63 3 330.33 2.67 332.36L0 352l19.43-1.36c1.8-.1 44.69-2.89 84.4-31.9q7.58-5.53 14.56-11.37c24.37 19.83 61.14 48.6 102.86 62.74L208 432l23.17-4.22c37.49-6.34 70.08-26.4 92-43.32a284.27 284.27 0 0 0 49.32-7.23l-7.91-13.18A214.92 214.92 0 0 1 335.45 256Z" />
                            <path fill="#d10b05"
                                d="M499.59 221.75c-5.85-9.88-16.54-24.9-34.19-40.28a209.82 209.82 0 0 0-62-37L392.23 164a183.22 183.22 0 0 0-.09 183.87l11.75 19.57a209.26 209.26 0 0 0 61.42-36.49C497.05 303.47 512 269 512 256c0-12.31-8-26.74-12.41-34.25ZM416 256a16 16 0 1 1 16-16a16 16 0 0 1-16 16Z" />
                        </svg>Dari Laut
                    </button>
                </form>
                <!-- 7 -->
                <form action="">
                    <button
                        class="px-5 py-[5px] lg:mr-0 md:mr-10 sm:mr-3 rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 lg:ml-7 md:ml-7 sm:ml-4" xmlns="http://www.w3.org/2000/svg" width="40"
                            height="40" viewBox="0 0 512 512">
                            <path fill="#d10b05"
                                d="M312.813 24.313L88.5 282.938l65.563 95.718c90.372-68.07 182.097-177.937 254.843-295.844l-96.094-58.5zm9.125 30.03c2.658.03 4.815.813 6.562 2c3.494 2.376 6.438 7.41 6.438 16.376c0 17.928-14.45 41.012-29.657 48.124c-7.603 3.555-12.692 2.844-16.186.47c-3.494-2.377-6.47-7.412-6.47-16.376c0-17.93 14.48-41.014 29.688-48.126c3.803-1.777 6.967-2.5 9.625-2.468zm102.937 38.188c-73.88 119.784-166.747 231.365-260.25 301.564l42.53 62.125c93.965-68.158 219.3-202.6 281.564-324.845L424.874 92.53zM73.5 294.126c-17.832 17.12-35.684 32.712-53.563 46.844v120.59c27.78-33.634 57.404-75.49 87.75-117.53L73.5 294.124z" />
                        </svg>Potong Fillet
                    </button>
                </form>
                <!-- 8 -->
                <form action="">
                    <button
                        class="px-5 py-[5px] rounded-lg items-center hover:bg-[#D10B05] lg:text-base text-xs hover:text-white hover:border-[#D10B05] transition-all duration-200 ease-in-out">
                        <svg class="pr-2 lg:ml-7 md:ml-6 sm:ml-3" xmlns="http://www.w3.org/2000/svg" width="40"
                            height="40" viewBox="0 0 24 24">
                            <path fill="#d10b05" fill-rule="evenodd"
                                d="M17 3a4 4 0 1 0 0 8a4 4 0 0 0 0-8ZM3 17a4 4 0 1 1 8 0a4 4 0 0 1-8 0Zm10-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-5ZM3 4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4Z"
                                clip-rule="evenodd" />
                        </svg>Lihat Semua
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="carousel rounded-box lg:hidden block md:px-8 md:mt-5">
    <div class="flex items-center">
        <div class="carousel-item">
            <!-- 1 -->
            <form action="">
                <button class="px-3 py-[5px] rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-4" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 256 256">
                        <path fill="#d10b05"
                            d="M232 88.86V56a16 16 0 0 0-16-16H40a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h112v24a8 8 0 0 0 11.58 7.16L192 216.94l28.42 14.22A8 8 0 0 0 232 224v-56.86a55.87 55.87 0 0 0 0-78.28ZM128 144H72a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16Zm0-32H72a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16Zm88 99.06l-20.42-10.22a8 8 0 0 0-7.16 0L168 211.06v-32.47a55.94 55.94 0 0 0 48 0ZM192 168a40 40 0 1 1 40-40a40 40 0 0 1-40 40Z">
                        </path>
                    </svg> Bersertifikat
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 2 -->
            <form action="">
                <button class="py-[5px] px-3 rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-3" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#d10b05" fill-rule="evenodd"
                            d="m16.137 4.728l1.83 1.83C20.655 9.248 22 10.592 22 12.262c0 1.671-1.345 3.015-4.034 5.704C15.277 20.657 13.933 22 12.262 22c-1.67 0-3.015-1.345-5.704-4.034l-1.83-1.83c-1.545-1.545-2.318-2.317-2.605-3.32c-.288-1.003-.042-2.068.45-4.197l.283-1.228c.413-1.792.62-2.688 1.233-3.302c.614-.613 1.51-.82 3.302-1.233l1.228-.284c2.13-.491 3.194-.737 4.197-.45c1.003.288 1.775 1.061 3.32 2.606Zm-4.99 9.6c-.673-.672-.668-1.638-.265-2.403a.75.75 0 0 1 1.04-1.046c.34-.18.713-.276 1.085-.272a.75.75 0 0 1-.014 1.5a.88.88 0 0 0-.609.277c-.387.387-.286.775-.177.884c.11.109.497.21.884-.177c.784-.784 2.138-1.044 3.005-.177c.673.673.668 1.639.265 2.404a.75.75 0 0 1-1.04 1.045a2.201 2.201 0 0 1-1.472.232a.75.75 0 1 1 .302-1.47c.177.037.463-.021.708-.266c.387-.388.286-.775.177-.884c-.11-.109-.497-.21-.884.177c-.784.784-2.138 1.044-3.005.176Zm-1.126-4.035a2 2 0 1 0-2.829-2.828a2 2 0 0 0 2.829 2.828Z"
                            clip-rule="evenodd" />
                    </svg>20 Ribuan
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 3 -->
            <form action="">
                <button class="px-3 py-[5px] rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-4" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#d10b05"
                            d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2H4m11.5 3L17 8.5L8.5 17L7 15.5L15.5 7m-6.69.04c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77m6.38 6.38c.98 0 1.77.79 1.77 1.77a1.77 1.77 0 0 1-1.77 1.77c-.98 0-1.77-.79-1.77-1.77a1.77 1.77 0 0 1 1.77-1.77Z" />
                    </svg>Lagi Promo
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 4 -->
            <form action="">
                <button class="px-3 py-[5px] rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-6" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#d10b05"
                            d="M20.16 12.73A6.27 6.27 0 0 0 19.09 3c-2.01-1.33-4.7-1.34-6.73-.03c-1.76 1.13-2.73 2.89-2.9 4.71c-.13 1.32-.63 2.55-1.55 3.47l-.03.03c-1.16 1.16-1.16 2.93-.07 4.01l.99.99a2.794 2.794 0 0 0 3.95 0c.97-.97 2.25-1.5 3.64-1.65c1.37-.15 2.71-.75 3.77-1.8m-13.9 7.13c.27.56.18 1.24-.29 1.7a1.49 1.49 0 0 1-2.55-.98a1.49 1.49 0 0 1-.98-2.55c.46-.46 1.15-.56 1.7-.29l2.48-2.43c.14.19.3.41.48.59l.99.99c.21.2.41.37.67.52l-2.5 2.45Z" />
                    </svg>Daging Impor
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 5 -->
            <form action="">
                <button class="px-3 py-[5px]  rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-8" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#d10b05"
                            d="m9.675 13.7l.875-2.85L8.25 9h2.85l.9-2.8l.9 2.8h2.85l-2.325 1.85l.875 2.85l-2.3-1.775L9.675 13.7ZM6 23v-7.725q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2q3.35 0 5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275V23l-6-2l-6 2Zm6-7q2.5 0 4.25-1.75T18 10q0-2.5-1.75-4.25T12 4Q9.5 4 7.75 5.75T6 10q0 2.5 1.75 4.25T12 16Z" />
                    </svg>Daging Premium
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 6 -->
            <form action="">
                <button class="px-3 py-[5px] rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-3" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 512 512">
                        <path fill="#d10b05"
                            d="M335.45 256a214.83 214.83 0 0 1 29.08-108l7.62-13.26a280.69 280.69 0 0 0-48.64-7.15c-21.94-16.9-54.64-36.95-92.34-43.33L208 80l13.37 61.86c-41.67 14.14-78.43 42.86-102.76 62.62q-7.06-5.91-14.78-11.55c-39.71-29-82.6-31.8-84.4-31.9L0 160l2.67 19.31c.29 2 6.79 44.73 31.65 76.52C9.46 287.63 3 330.33 2.67 332.36L0 352l19.43-1.36c1.8-.1 44.69-2.89 84.4-31.9q7.58-5.53 14.56-11.37c24.37 19.83 61.14 48.6 102.86 62.74L208 432l23.17-4.22c37.49-6.34 70.08-26.4 92-43.32a284.27 284.27 0 0 0 49.32-7.23l-7.91-13.18A214.92 214.92 0 0 1 335.45 256Z" />
                        <path fill="#d10b05"
                            d="M499.59 221.75c-5.85-9.88-16.54-24.9-34.19-40.28a209.82 209.82 0 0 0-62-37L392.23 164a183.22 183.22 0 0 0-.09 183.87l11.75 19.57a209.26 209.26 0 0 0 61.42-36.49C497.05 303.47 512 269 512 256c0-12.31-8-26.74-12.41-34.25ZM416 256a16 16 0 1 1 16-16a16 16 0 0 1-16 16Z" />
                    </svg>Dari Laut
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 7 -->
            <form action="">
                <button class="px-3 py-[5px]  rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-5" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 512 512">
                        <path fill="#d10b05"
                            d="M312.813 24.313L88.5 282.938l65.563 95.718c90.372-68.07 182.097-177.937 254.843-295.844l-96.094-58.5zm9.125 30.03c2.658.03 4.815.813 6.562 2c3.494 2.376 6.438 7.41 6.438 16.376c0 17.928-14.45 41.012-29.657 48.124c-7.603 3.555-12.692 2.844-16.186.47c-3.494-2.377-6.47-7.412-6.47-16.376c0-17.93 14.48-41.014 29.688-48.126c3.803-1.777 6.967-2.5 9.625-2.468zm102.937 38.188c-73.88 119.784-166.747 231.365-260.25 301.564l42.53 62.125c93.965-68.158 219.3-202.6 281.564-324.845L424.874 92.53zM73.5 294.126c-17.832 17.12-35.684 32.712-53.563 46.844v120.59c27.78-33.634 57.404-75.49 87.75-117.53L73.5 294.124z" />
                    </svg>Potong Fillet
                </button>
            </form>
        </div>
        <div class="carousel-item">
            <!-- 8 -->
            <form action="">
                <button class="px-3 py-[5px] rounded-lg items-center text-xs transition-all duration-200 ease-in-out">
                    <svg class="pr-2 ml-5" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#d10b05" fill-rule="evenodd"
                            d="M17 3a4 4 0 1 0 0 8a4 4 0 0 0 0-8ZM3 17a4 4 0 1 1 8 0a4 4 0 0 1-8 0Zm10-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-5ZM3 4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4Z"
                            clip-rule="evenodd" />
                    </svg>Lihat Semua
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Fitur -->

<!-- Flash Sale -->
<div class="w-full px-14 sm:px-3">
    <div class="container mx-auto lg:mt-24 md:mt-8 sm:mt-5">
        <div class="flex">
            <div class="flex items-center">
                <p class="font-semibold text-[24px] md:text-[20px] pr-4 lg:block md:block hidden">
                    Flash Sale Waktu Terbatas
                </p>
                <p class="font-semibold text-[14px] pr-1 lg:hidden md:hidden block">
                    Flash Sale
                </p>
                <!-- <span class="countdown px-2 text-2xl flex items-center">
                    <span style="--value:00;" class="bg-[#FA4742] text-white px-2 rounded-md"></span>:
                    <span style="--value:00;" class="bg-[#FA4742] text-white px-2 rounded-md"></span>:
                    <span style="--value:00;" class="bg-[#FA4742] text-white px-2 rounded-md"></span>
                </span> -->
                <div class="flex gap-2 sm:gap-1 items-center">
                    <p class="bg-[#FA4742] text-white py-2 sm:py-1 sm:px-2 px-3 rounded-lg sm:rounded-sm font-semibold sm:font-normal sm:text-xs countdown-number"
                        id="hour">
                        00
                    </p>
                    :
                    <p class="bg-[#FA4742] text-white py-2 sm:py-1 sm:px-2 px-3 rounded-lg sm:rounded-sm font-semibold sm:font-normal sm:text-xs countdown-number"
                        id="minute">
                        41
                    </p>
                    :
                    <p class="bg-[#FA4742] text-white py-2 sm:py-1 sm:px-2 px-3 rounded-lg sm:rounded-sm font-semibold sm:font-normal sm:text-xs countdown-number"
                        id="second">
                        29
                    </p>
                </div>
            </div>
        </div>
        <div class="container lg:mt-9 md:mt-5 sm:mt-3 block md:hidden sm:hidden">
            <div class="grid grid-cols-12 mx-auto items-center">
                <div class="col-span-3">
                    <div class="bg-[#FA4742] lg:w-full md:w-[100%] h-[336px] rounded-lg text-white lg:pl-9 md:pl-5 pt-12 relative"
                        data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in-out"
                        data-aos-once="true">
                        <p class=" font-semibold lg:text-[25px] md:text-[20px] leading-none">
                            Diskon Gede <br />
                            Tiap Hari
                        </p>
                        <p class="pt-3 leading-5">
                            Dapetin harga <br /><b>spesial</b> dengan <br />
                            waktu <b>terbatas</b>.
                        </p>
                        <button
                            class="text-[#D10B05] bg-white px-4 py-2 rounded-full mt-6 font-bold lg:text-base md:text-[12px]">
                            Selengkapnya
                        </button>
                        <p class="text-white pt-3">*S&K Berlaku</p>
                    </div>
                </div>
                <!-- 1 -->
                <div class="col-span-2 absolute lg:ml-[230px] md:ml-36  ">
                    <a href="">
                        <div class="bg-white h-[272px] lg:w-[215px] md:w-[150px] rounded-2xl drop-shadow-lg">
                            <img src="{{asset('assets/img_index/asset/flashsale/sliceYakiniku.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="lg:text-[14px] md:text-[12px] leading-4 font-medium">
                                    US Sliced Beef Slice <br />
                                    Yakiniku Gyudon 500gr
                                </p>
                                <p class="font-bold pt-2">Rp45.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through">Rp59.000</p>
                                    <p class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2">
                                        24%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 2 -->
                <div class="col-span-2 lg:ml-28 md:ml-36">
                    <a href="">
                        <div class="bg-white h-[272px] lg:w-[215px] md:w-[150px] rounded-2xl drop-shadow-lg">
                            <img src="{{asset('assets/img_index/asset/flashsale/wagyuMeltique.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="lg:text-[14px] md:text-[12px] leading-4 font-medium">
                                    Saikoro Beef Wagyu <br />
                                    Meltique Cube 500gr
                                </p>
                                <p class="font-bold pt-2">Rp77.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through">Rp85.000</p>
                                    <p class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2">
                                        9%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 3 -->
                <div class="col-span-2 lg:ml-28 md:ml-[200px]">
                    <a href="">
                        <div class="bg-white h-[272px] lg:w-[215px] md:w-[150px] rounded-2xl drop-shadow-lg">
                            <img src="{{asset('assets/img_index/asset/flashsale/AUSstriploin.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="lg:text-[14px] md:text-[12px] leading-4 font-medium">
                                    Daging Sapi AUS Striploin <br />
                                    Beef Steak Cut 200gr
                                </p>
                                <p class="font-bold pt-2">Rp37.900</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through">Rp50.000</p>
                                    <p class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2">
                                        24%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 4 -->
                <div class="col-span-2 lg:ml-28 lg:block md:hidden">
                    <a href="">
                        <div class="bg-white h-[272px] lg:w-[215px] md:w-[150px] rounded-2xl drop-shadow-lg">
                            <img src="{{asset('assets/img_index/asset/flashsale/Angus.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-[14px] leading-4 font-medium">
                                    William Shortplate USA - <br />Angus Beef 500gr
                                </p>
                                <p class="font-bold pt-2">Rp122.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through">Rp170.000</p>
                                    <p class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2">
                                        21%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 5 -->
                <div class="col-span-2 ml-28 lg:block md:hidden">
                    <a href="">
                        <div class="bg-white h-[272px] lg:w-[215px] md:w-[150px] rounded-2xl drop-shadow-lg">
                            <img src="{{asset('assets/img_index/asset/flashsale/ribeye.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-[14px] leading-4 font-medium">
                                    Ribeye Slice Beef / Daging <br />
                                    Sapi Tipis Cuberoll 500gr
                                </p>
                                <p class="font-bold pt-2">Rp70.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through">Rp84.000</p>
                                    <p class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2">
                                        17%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Carousel Mobile -->
        <div class="carousel rounded-box lg:hidden block mt-3 flex items-center gap-3">
            <div class="carousel-item">
                <div class="col-span-2">
                    <a href="">
                        <div class="bg-white h-[210px] w-[150px] rounded-2xl drop-shadow-lg mb-2">
                            <img src="{{asset('assets/img_index/asset/flashsale/sliceYakiniku.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-xs leading-4 font-medium">
                                    US Sliced Beef Slice <br />
                                    Yakiniku Gyudon 500gr
                                </p>
                                <p class="font-bold pt-2 text-xs">Rp45.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through text-xs">Rp59.000</p>
                                    <p
                                        class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2 text-xs">
                                        24%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-span-2">
                    <a href="">
                        <div class="bg-white h-[210px] w-[150px] rounded-2xl drop-shadow-lg mb-2">
                            <img src="{{asset('assets/img_index/asset/flashsale/wagyuMeltique.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-xs leading-4 font-medium">
                                    Saikoro Beef Wagyu <br />
                                    Meltique Cube 500gr
                                </p>
                                <p class="font-bold pt-2 text-xs">Rp77.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through text-xs">Rp85.000</p>
                                    <p
                                        class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2 text-xs">
                                        9%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-span-2">
                    <a href="">
                        <div class="bg-white h-[210px] w-[150px] rounded-2xl drop-shadow-lg mb-2">
                            <img src="{{asset('assets/img_index/asset/flashsale/AUSstriploin.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-xs leading-4 font-medium">
                                    Daging Sapi AUS Striplo<br>in
                                    Beef Steak Cut 200gr
                                </p>
                                <p class="font-bold pt-2 text-xs">Rp37.900</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through text-xs">Rp50.000</p>
                                    <p
                                        class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2 text-xs">
                                        24%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-span-2">
                    <a href="">
                        <div class="bg-white h-[210px] w-[150px] rounded-2xl drop-shadow-lg mb-2">
                            <img src="{{asset('assets/img_index/asset/flashsale/Angus.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-xs leading-4 font-medium">
                                    William Shortplate USA - <br />Angus Beef 500gr
                                </p>
                                <p class="font-bold pt-2 text-xs">Rp122.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through text-xs">Rp170.000</p>
                                    <p
                                        class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2 text-xs">
                                        21%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-span-2">
                    <a href="">
                        <div class="bg-white h-[210px] w-[150px] rounded-2xl drop-shadow-lg mb-2">
                            <img src="{{asset('assets/img_index/asset/flashsale/ribeye.png')}}" alt="" />
                            <div class="pt-3 pl-3">
                                <p class="text-xs leading-4 font-medium">
                                    Ribeye Slice Beef / Dagi <br>ng
                                    Tipis Cuberoll 500gr
                                </p>
                                <p class="font-bold pt-2 text-xs">Rp70.000</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-[#999999] line-through text-xs">Rp84.000</p>
                                    <p
                                        class="bg-[#F1C40F] bg-opacity-30 text-[#F1C40F] font-bold rounded-lg py-1 px-2 text-xs">
                                        17%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Flash Sale -->

<!-- Produk Terlaris -->
<div class="w-full mt-20 lg:block hidden">
    <div class="container mx-auto">
        <div class="border-2 border-[E6E6E6] mx-14 rounded-lg">
            <div class="justify-between flex mx-16 mt-10">
                <p class="text-[24px] font-semibold">Produk Paling Laris</p>
                <div class="items-center flex">
                    <button class="text-[#D10B05] flex gap-2 font-semibold">
                        Lihat Semua
                        <img src="{{asset('assets/img_index/asset/hiro/flashsale.svg')}}" alt="" />
                    </button>
                </div>
            </div>
            <swiper-container class="mySwiper mt-6 mb-6" navigation="true" pagination="false" keyboard="true"
                mousewheel="true" css-mode="true" loop="false">
                <swiper-slide>
                    <div class="flex mx-16 gap-8">
                        @foreach ($produk_laris as $pl )
                        <div class="col-span-2">
                            <a href="">
                                <div class="bg-white h-[335px] w-[228px] rounded-2xl drop-shadow-lg mb-2">
                                    <img src="{{asset('storage/img_uploaded/'.$pl['foto']['foto1'])}}" alt="" />
                                    <div class="pt-3 pl-3">
                                        <p class="text-[14px] leading-4 font-medium">
                                            {{$pl['nama_produk']}}
                                        </p>
                                        <p class="font-bold pt-2">
                                            Rp<span>{{number_format($pl['varian'][0]['harga'], 0, ',')}}</span></p>
                                        <p class="pt-5 flex text-[#999]">
                                            <img class="pr-2"
                                                src="{{asset('assets/img_index/asset/card/clarity_store-solid.svg')}}"
                                                alt="" />{{$pl['nama_toko']}}
                                        </p>
                                        <p class="text-[#D10B05] font-medium flex">
                                            <img class="pr-2"
                                                src="{{asset('assets/img_index/asset/card/solar_point-on-map-bold.svg')}}"
                                                alt="" />{{$pl['alamat_toko']['alamat']}}
                                        </p>
                                        <p class="flex text-[#999]">
                                            <img class="pr-2"
                                                src="{{asset('assets/img_index/asset/card/ic_round-star.svg')}}"
                                                alt="" /><span class="pr-1">4.9</span> |
                                            <span class="pl-1">1</span>rb+ terjual
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </div>
</div>
<!-- Produk Terlaris -->

<!-- Pilihan Daging -->
<div class="w-full lg:mt-20 md:mt-10 sm:mt-4 ">
    <div class="container mx-auto lg:px-[53px] md:px-12 px-5">
        <h1 class="text-[24px] md:text-[20px] font-medium lg:mb-20 sm:mb-10 sm:text-[16px]">Ngga Cuma Daging Sapi!</h1>
        <div class="grid grid-cols-12 lg:gap-10 sm:gap-2">
            <!-- 1 -->
            <div class="lg:col-span-3 col-span-6 ">
                <a href="" class="items-center flex lg:mt-5 md:mt-20 group">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/ikan.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Ikan</p>
                </a>
            </div>
            <!-- 2 -->
            <div class="lg:col-span-3 col-span-6 ">
                <a href="" class="items-center flex group lg:mt-5 md:mt-20">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/bebek.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Bebek</p>
                </a>
            </div>
            <!-- 3 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-5 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/kerbau.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Kerbau</p>
                </a>
            </div>
            <!-- 4 -->
            <div class="lg:col-span-3 col-span-6 ">
                <a href="" class="items-center flex group lg:mt-5 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/kelinci.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Kelinci</p>
                </a>
            </div>
            <!-- 5 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/ayam.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Ayam</p>
                </a>
            </div>
            <!-- 6 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/kambing.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Kambing</p>
                </a>
            </div>
            <!-- 7 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/domba.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Domba</p>
                </a>
            </div>
            <!-- 8 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/udang.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Udang</p>
                </a>
            </div>
            <!-- 9 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/sapi.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Sapi</p>
                </a>
            </div>
            <!-- 10 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/puyuh.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Daging
                        Puyuh</p>
                </a>
            </div>
            <!-- 11 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/kerang.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Kerang
                        dan Tiram</p>
                </a>
            </div>
            <!-- 12 -->
            <div class="lg:col-span-3 col-span-6">
                <a href="" class="items-center flex group lg:mt-28 md:mt-36 mt-[70px]">
                    <img src="{{asset('assets/img_index/asset/pilihanDaging/cumi.png')}}" alt=""
                        class="absolute sm:w-40" />
                    <div
                        class="absolute w-[310px] h-[129px] rounded-xl bg-gradient-to-r from-[#d10b05] opacity-0 group-hover:opacity-100 transition-all duration-200 sm:hidden">
                    </div>
                    <p
                        class="absolute block text-white text-[20px] font-semibold lg:pl-8 md:pl-5 sm:pl-3 sm:text-[14px] group-hover:opacity-100">
                        Cumi Cumi</p>
                </a>
            </div>
        </div>
        <img src="{{asset('assets/img_index/asset/pilihanDaging/line.svg')}}" alt=""
            class="mt-28 justify-center lg:block hidden" />
    </div>
</div>
<!-- Pilihan Daging -->

<!-- Rekomendasi -->
<div class="w-full mt-11 md:mt-24 sm:mt-[60px]">
    <div class="container mx-auto lg:px-[56px] md:px-12 sm:px-5">
        <h1 class="text-[24px] font-semibold sm:text-[16px]">Rekomendasi Buat Kamu</h1>
        <div class="grid grid-cols-12 lg:mt-9 mt-2 lg:gap-10 sm:gap-2">
            <!-- Baris 1 -->
            @foreach ($rekproduk as $rp )
            <div class="lg:col-span-2 md:col-span-4 sm:col-span-6">
                <a href="/produk/{{$rp['_id']}}">
                    <div
                        class="bg-white h-[344px] sm:h-[310px] w-[207px] sm:w-[155px] rounded-2xl drop-shadow-lg border-white border-2 hover:border-[#D10B05] hover:border-2 transition-all duration-200 ease-linear">
                        <img src="{{asset('storage/img_uploaded/'.$rp['foto']['foto1'])}}" alt=""
                            class="w-[228px] lg:h-[152px] h-[140px] rounded-t-[15px]" />
                        <div class="pt-3 pl-4">
                            <p class="text-[14px] sm:text-[12px] leading-4 font-medium lg:pr-5">
                                {{$rp['nama_produk']}}
                            </p>
                            <p class="font-bold lg:pt-2 sm:pt-1 sm:text-[14px]">
                                Rp<span>{{number_format($rp['varian'][0]['harga'], 0, ',')}}</span></p>
                            <p class="pt-5 flex text-[#999] sm:text-xs leading-4">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/clarity_store-solid.svg')}}"
                                    alt="" />{{substr($rp['nama_toko'],0,15)}}...
                            </p>
                            <p class="text-[#D10B05] font-medium flex sm:text-xs sm:mt-1 text-[14px]">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/solar_point-on-map-bold.svg')}}"
                                    alt="" />{{$rp['alamat_toko']['alamat']}}
                            </p>
                            <p class="flex text-[#999] sm:text-xs sm:mt-1">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/ic_round-star.svg')}}" alt="" /><span
                                    class="pr-1">4.7</span> |
                                <span class="pl-1 pr-1">672</span>terjual
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="flex justify-center pt-12 lg:pb-32 md:pb-14 sm:pb-10">
            <form action="">
                <button
                    class="border-solid border-2 border-[#D10B05] text-[#D10B05] font-semibold py-3 sm:py-2 px-24 sm:px-10 lg:rounded-xl rounded-lg lg:text-base md:text-sm text-xs hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">
                    Lihat Lainnya
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Rekomendasi -->

@endsection