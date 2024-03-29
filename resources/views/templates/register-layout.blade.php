<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css'])
    <title>Butchery</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />

    <style>
    @media (min-width: 1280px) and (max-width: 1439px) {
        .button {
            padding: 12px 50px 12px 50px;
        }

        .button-submit {
            padding: 12px 125px 12px 125px;
        }

        .button-submit2 {
            padding: 12px 110px 12px 110px;
        }

        #kota,
        #kecamatan {
            width: 140px;
        }
    }
    </style>
</head>

<body>

    @yield('content')

    <div class="border-t-2 border-solid border-[#E6E6E6] lg:mt-40 mt-20"></div>
    <!-- FOOTER -->
    <footer class="container mx-auto sm:text-xs">
        <div class="w-full mt-12 mb-12">
            <div class="container px-[53px]">
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
                    <div class="lg:col-span-2 col-span-6 mt-0 lg:ml-0 sm:ml-6">
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
    @vite(['resources/js/app.js'])

    <script src="{{asset('jquery/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/password.js')}}"></script>
    <script src="{{asset('js/selectIndonesia.js')}}"></script>

</body>

</html>