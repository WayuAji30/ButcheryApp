<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    @vite(['resources/css/app.css', 'resources/css/ouput.css'])

    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    #logout button:hover svg path {
        fill: #d10b05;
    }
    </style>

</head>

<body class="bg-[#f3f3f3]">

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="">
            <div class="bg-[#D10B05] py-4">
                <div class="mx-12 flex items-center justify-between">
                    <div class="flex">
                        <img src="{{asset('assets/img_index/asset/navbar/phone.svg')}}" alt="" class="pr-2 -mt-2" />
                        <p class="text-white mr-4">Butchery app is now available on</p>
                        <a href="" class="mr-1"><img src="{{asset('assets/img_index/asset/navbar/googleplay.svg')}}"
                                alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/navbar/appstore.svg')}}" alt="" /></a>
                    </div>
                    <div class="flex gap-5 items-center">
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/office.svg')}}" alt=""
                                class="pr-1" />Tentang Kami</a>
                        @if (session()->has('login') && $user->role == "supplier")
                        <a href="/register_mitra/{{session('id_user')}}" class="hidden text-white flex"
                            id="register_mitra" data-id="{{session('id_user')}}">
                            <img src="{{asset('assets/img_index/asset/navbar/mitra.svg')}}" alt="" class="pr-1" />Daftar
                            Jadi Mitra
                        </a>
                        @else
                        <a href="/register_mitra/{{session('id_user')}}" class=" text-white flex" id="register_mitra"
                            data-id="{{session('id_user')}}">
                            <img src="{{asset('assets/img_index/asset/navbar/mitra.svg')}}" alt="" class="pr-1" />Daftar
                            Jadi Mitra
                        </a>
                        @endif
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/help.svg')}}" alt="" class="pr-1" />Bantuan
                        </a>
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/globe.svg')}}" alt="" class="pr-1" />Bahasa
                            Indonesia<img src="{{asset('asset/navbar/arrowUp.svg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white drop-shadow-md">
            <div class="pt-6 pb-7 items-center justify-between flex lg:px-10 md:px-5">
                <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}"
                        alt="LogoButchery" class="mr-9" /></a>
                <div class="flex mr-8">
                    <form action="/index">
                        <div class="relative flex items-center">
                            <input type="text" name="" id=""
                                placeholder="Beli Daging Segar Dengan Kualitas Terbaik Disini"
                                class="border-solid border-2 border-slate-300 rounded-md w-[650px] pl-5 py-4 focus:outline-[#D10B05]" />
                            <button class="absolute right-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#999"
                                        d="m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617Zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.867-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="gap-3 flex" id="icon-bar">
                    <a href="/cart/" class="p-1 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-linear">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#454545"
                                d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
                        </svg>
                    </a>
                    <a href="" class="p-1 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-linear">
                        <div class="relative inline-flex">
                            <div
                                class="absolute bottom-auto left-auto right-0 top-0 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 rounded-full bg-red-600 p-1">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <g fill="none" stroke="#454545" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                    <circle cx="12" cy="3" r="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <img src="{{asset('assets/img_index/asset/navbar/pembatas.svg')}}" alt="" class="mx-4" />
                @if (session()->has('login') && $user->role == 'konsumen')
                <div class="">
                    <div class="flex items-center gap-3">
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=" "><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_index/asset/navbar/profile-male.svg')}}" alt="" />
                                    <p class="font-medium text-lg mr-8">{{$user->username}}</p>
                                </a></label>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}" class="text-[#d10b05] font-semibold hover:text-[#d10b05]">Lihat Profile</a></li>
                                <li><a href="/logout" class="font-semibold">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @elseif(session()->has('login') && $user->role == "supplier")
                <div class="">
                    <div class="flex items-center gap-8">
                        <a href="/daftarProduk/{{$user->_id}}" class="flex items-center gap-2"><img
                                src="{{asset('assets/img_index/asset/navbar/tokosaya.svg')}}" alt="" />
                            <p class="font-semibold text-lg">Toko Saya</p>
                        </a>
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=" "><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt=""
                                        class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium text-lg mr-8">{{substr($user->username,0,1)}}...</p>
                                </a></label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/logout" class="font-semibold flex justify-between">Logout <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="w-full mt-12 pb-12 bg-white pt-14">
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
                    <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 lg:mt-0 md:mt-0 sm:mt-0">
                        <h1 class="font-semibold">Layanan Pelanggan</h1>
                        <div class="mt-5 text-[#999999]">
                            <ul class="list-none">
                                <li><a href="" class="hover:text-[#D10B05]">Bantuan</a></li>
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
                            <ul class="ml-5 list-none">
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

    @vite(['resources/js/app.js', 'resources/js/password.js',
    'resources/jquery/code.jquery.com_jquery-3.7.1.min.js','resources/js/changePassword.js',
    'resources/js/selectIndonesia.js', 'resources/js/profile.js'])

</body>

</html>