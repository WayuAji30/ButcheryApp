<?php

use App\Models\KonsumensModel;

$user = KonsumensModel::find(session('id_user'));

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css','resources/css/output.css'])
    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    #fitur button:hover svg path {
        fill: white;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="bg-white drop-shadow-md">
            <div
                class="lg:pt-6 md:pt-6 sm:pt-4 lg:pb-7 md:pb-7 sm:pb-4 items-center justify-between flex lg:px-12 md:px-5">
                <div class="flex items-center">
                    <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/logoButchery.svg')}}"
                            alt="LogoButchery" class="mr-5 lg:block md:block sm:hidden" /></a>
                    <p
                        class="font-medium lg:text-[24px] md:text-[24px] mt-2 text-[#999] sm:text-[20px] lg:ml-0 md:ml-0 sm:ml-4">
                        Pusat
                        Mitra</p>
                </div>
                <div class="lg:gap-3 md:gap-1 sm:gap-2 flex items-center" id="icon-bar">
                    <a href=""><img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="profile"
                            class="border-2 border-[#D10B05] rounded-full sm:w-10" /></a>
                    <p class="font-medium lg:mr-0 md:mt-0 mr-4">{{$user->username}}</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')


    <div class="border-t-2 border-solid border-[#E6E6E6] lg:mt-40 md:mt-40 sm:mt-20"></div>
    <!-- FOOTER -->
    <footer>
        <div class="w-full mt-12 mb-12 sm:text-sm md:text-sm">
            <div class="container lg:px-[53px] md:px-[53px] sm:px-7">
                <div class="grid grid-cols-12">
                    <div class="lg:col-span-2 md:col-span-6 sm:col-span-6">
                        <h1 class="font-semibold">Jelajahi Butchery</h1>
                        <div class="mt-5 text-[#999999]">
                            <ul class="list-none">
                                <li>
                                    <a href="" class="hover:text-[#D10B05]">Tentang Butchery</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Blog</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kebijakan Butchery</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kebijakan Privasi</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Mitra Centre</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Karir</a>
                                </li>
                            </ul>
                        </div>
                        <p class="font-semibold mt-9">Ikuti Kami</p>
                        <div class="flex gap-2 mt-4">
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/facebook.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/x.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/youtube.svg')}}" alt="" /></a>
                            <a href=""><img src="{{asset('assets/img_index/asset/footer/instagram.svg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 sm:ml-3">
                        <h1 class="font-semibold">Layanan Pelanggan</h1>
                        <div class="mt-5 text-[#999999]">
                            <ul class="list-none">
                                <li><a href="mailto:servicebutchery@gmail.com?subject=Bantuan"
                                        class="hover:text-[#D10B05]">Bantuan</a></li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Butchery Care</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Hubungi Kami</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Kritik dan Saran</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Gratis Ongkir</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Pengembalian Barang</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Syarat dan Ketentuan</a>
                                </li>
                                <li class="mt-2">
                                    <a href="" class="hover:text-[#D10B05]">Daftar Mitra</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10">
                        <h1 class="font-semibold">Pembayaran</h1>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BCA.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BNI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BRI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/Mandiri.svg')}}" alt="" />
                            </button>
                        </div>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/BSI.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/Permata.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-3 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/CimbNiaga.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-4 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/SeaBank.svg')}}" alt="" />
                            </button>
                        </div>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/ovo.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-3 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/dana.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/gopay.svg')}}" alt="" />
                            </button>
                            <button class="bg-white px-5 py-2 shadow-lg rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/spay.svg')}}" alt="" />
                            </button>
                        </div>
                        <h1 class="font-semibold mt-10">Pengiriman</h1>
                        <div class="flex mt-5 gap-2">
                            <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/butchery.svg')}}" alt="" />
                            </button>
                            <!-- <button
                  class="bg-white px-3 py-2 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/gojek.svg" alt="" />
                </button>
                <button
                  class="bg-white px-3 py-3 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/grab.svg" alt="" />
                </button> -->
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10 md:ml-10">
                        <h1 class="font-semibold">Get Butchery App</h1>
                        <div class="flex mt-5 items-center">
                            <button class="p-2 shadow-md rounded-lg" disabled>
                                <img src="{{asset('assets/img_index/asset/footer/qr.svg')}}" alt="" />
                            </button>
                            <ul class="ml-5 list-none -mt-4">
                                <li>
                                    <a href="" class="ml-5"><img
                                            src="{{asset('assets/img_index/asset/footer/googleplay.svg')}}"
                                            alt="" /></a>
                                </li>
                                <li class="mt-3">
                                    <a href=""><img src="{{asset('assets/img_index/asset/footer/appstore.svg')}}"
                                            alt="" /></a>
                                </li>
                            </ul>
                        </div>
                        <p class="text-[#B3B3B3] mt-20">
                            © Butchery 2023. Hak Cipta Dilindungi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->

    @vite(['resources/js/app.js', 'resources/jquery/code.jquery.com_jquery-3.7.1.min.js',
    'resources/js/selectIndonesia.js'])
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
</body>

</html>