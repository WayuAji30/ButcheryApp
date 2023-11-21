<?php

use App\Models\KonsumensModel;
use App\Models\SuppliersModel;

$user = KonsumensModel::find(session('id_user'));
$supplier = SuppliersModel::where('user_id', session('id_user'))->first();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <!-- AOS Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Butchery | Mitra Center</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    .group:hover svg path {
        fill: #d10b05;
    }
    </style>
</head>

<body class="flex">
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="bg-white drop-shadow-md sm:px-2">
            <div class="lg:pt-6 lg:pb-7 p-3 flex items-center justify-between lg:pl-5 md:px-5">
                <div class="flex items-center">
                    <a href="/index"><img src="{{asset('assets/img_mitra_center/asset/navbar/logoButchery.svg')}}"
                            alt="LogoButchery" class="mr-5 lg:block hidden" /></a>

                    <!-- Navbar Mobile -->
                    <div class="drawer lg:hidden block">
                        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content">
                            <!-- Page content here -->
                            <label for="my-drawer" class=" swap swap-rotate">
                                <input type="checkbox" />
                                <!-- hamburger icon -->
                                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 512 512">
                                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                                </svg>
                                <!-- close icon -->
                                <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 512 512">
                                    <polygon
                                        points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                                </svg>

                            </label>
                        </div>
                        <div class="drawer-side z-50">
                            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                            <ul class="menu p-4 w-60 min-h-full bg-base-200 text-base-content">
                                <p class="font-medium text-[24px] mt-5 text-[#999]">
                                    Pusat Mitra
                                </p>
                                <div class="pt-4 ml-3">
                                    <h1 class="flex items-center font-semibold text-[16px]">
                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="#2b2b2b"
                                                d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                                        </svg>Toko Saya
                                    </h1>
                                    <div class="ml-10">
                                        <p class="mt-1 text-[#999]">Transaksi Bulan Ini</p>
                                        <p class="font-semibold mt-1">Rp<span>0</span></p>
                                        <p class="mt-1 text-[#999]">Total Transaksi</p>
                                        <p class="font-semibold mt-1">Rp<span>0</span></p>
                                    </div>
                                </div>
                                <div class="border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                                <div class="collapse collapse-arrow">
                                    <input type="checkbox" />
                                    <div class="collapse-title flex items-center font-semibold text-[16px]">
                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="#2b2b2b"
                                                d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1V3zM4 5h16v2H4V5zm15 15H5V9h14v11zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z" />
                                        </svg>
                                        Produk
                                    </div>
                                    <div class="collapse-content">
                                        <p>
                                            <a href="/tambahProduk"
                                                class="text-[#999] hover:text-[#D10B05] font-semibold pl-8">Tambah
                                                Produk</a>
                                        </p>
                                        <p class="mt-2">
                                            <a href="/daftarProduk/{{$supplier->_id}}"
                                                class="text-[#999] hover:text-[#D10B05] mt-2 font-semibold pl-8">Daftar
                                                Produk</a>
                                        </p>
                                        <p class="mt-2">
                                            <a href=""
                                                class="text-[#999] hover:text-[#D10B05] mt-2 font-semibold pl-8">Pelanggaran
                                                Produk</a>
                                        </p>
                                    </div>
                                </div>

                                <a href="/pesanan/{{$supplier->_id}}"
                                    class="flex items-center active-nav-link cta-btn ml-4 nav-item">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 24 24">
                                        <path fill="#2b2b2b"
                                            d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
                                    </svg>
                                    <p class="font-semibold text-[18px]">Pesanan</p>
                                </a>

                                <a href="/langganan"
                                    class="flex items-center active-nav-link ml-4 mt-4 cta-btn nav-item">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 13v2h16v-2H4ZM4 2h16q.825 0 1.413.588T22 4v11q0 .825-.588 1.413T20 17h-4v5l-4-2l-4 2v-5H4q-.825 0-1.413-.588T2 15V4q0-.825.588-1.413T4 2Zm0 8h16V4H4v6Zm0 5V4v11Z" />
                                    </svg>
                                    <p class="font-semibold text-[18px]">Langganan</p>
                                </a>

                                <div class="collapse collapse-arrow">
                                    <input type="checkbox" />
                                    <div class="collapse-title flex items-center font-semibold text-[16px]">
                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M2.75 2.75V17.4167C2.75 17.9029 2.94315 18.3692 3.28697 18.713C3.63079 19.0568 4.0971 19.25 4.58333 19.25H19.25"
                                                stroke="black" stroke-width="2" stroke-miterlimit="5.759"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.41797 12.8335L10.0846 9.16683L13.7513 12.8335L19.2513 7.3335"
                                                stroke="black" stroke-width="2" stroke-miterlimit="5.759"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.5 7.3335H19.25V10.0835" stroke="black" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Data
                                    </div>
                                    <div class="collapse-content">
                                        <p class="">
                                            <a href="/trenDaging"
                                                class="text-[#999] hover:text-[#D10B05] font-semibold pl-8">Tren
                                                Daging</a>
                                        </p>
                                        <p class="mt-2">
                                            <a href=""
                                                class="text-[#999] hover:text-[#D10B05] font-semibold pl-8">Pengunjung</a>
                                        </p>
                                        <p class="mt-2">
                                            <a href=""
                                                class="text-[#999] hover:text-[#D10B05] font-semibold pl-8">Pembeli</a>
                                        </p>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <p class="font-medium text-[24px] mt-2 text-[#999] lg:block hidden">
                        Pusat Mitra
                    </p>
                </div>
                <div class="lg:gap-2 md:gap-1 flex items-center" id="icon-bar">
                    @if(session()->has('NewDataPesanan'))
                    <a href="/pesanan/{{$supplier->_id}}"
                        class="py-1 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
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
                    @else
                    <a href="/pesanan/{{$supplier->_id}}"
                        class="py-1 pt-2 px-2 rounded-lg hover:bg-gray-200 transition-all duration-200 ease-in-out">
                        <div class="relative inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                class="sm:w-7">
                                <g fill="none" stroke="#454545" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                    <circle cx="12" cy="3" r="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    @endif

                    <a class="flex items-center gap-3">
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=""><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt=""
                                        class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium mr-8 text-lg cursor-default lg:block hidden">
                                        {{$user->username}}
                                    </p>
                                </a></label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}"
                                        class="text-[#d10b05] font-semibold">Lihat Profile</a></li>
                                <li><a href="/index" class="font-semibold text-[#d10b05]">Kembali Ke Beranda</a></li>
                                <li><a href="/logout" class="font-semibold flex justify-between">Logout <svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                        </svg></a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->
    @yield('content')

    @vite(['resources/js/app.js'])

    <script src="{{asset('jquery/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/tambahProduk.js')}}"></script>
    <script src="{{asset('js/hapusProduk.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    <script src="{{asset('js/change_status.js')}}"></script>    

    <!-- AOS Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script>
    // Menambahkan event listener untuk link dengan ID "produk"
    $("#produk").click(function(e) {
        e.preventDefault();
        $("#menu-produk").slideToggle(); // Menggunakan slideToggle untuk animasi
        $("#menu-data").slideUp(); // Menyembunyikan menu-data dengan animasi slideUp
    });

    // Menambahkan event listener untuk link dengan ID "data"
    $("#data").click(function(e) {
        e.preventDefault();
        $("#menu-data").slideToggle(); // Menggunakan slideToggle untuk animasi
        $("#menu-produk").slideUp(); // Menyembunyikan menu-produk dengan animasi slideUp
    });

    // Mencegah event klik menyebar ke dalam menu-produk
    $("#menu-produk").on("click", function(e) {
        e.stopPropagation();
    });

    // Mencegah event klik menyebar ke dalam menu-data
    $("#menu-data").on("click", function(e) {
        e.stopPropagation();
    });
    </script>

    <!-- FUCTION UNTUK ANIMASI ARROW DI NAVBAR KIRI -->
    <script>
    // Ambil elemen-elemen yang diperlukan
    const produkLink = document.getElementById('produk');
    const dataLink = document.getElementById('data');

    // Fungsi untuk menutup dropdown yang lain dan membuka yang terkait
    function toggleDropdown(link) {
        const arrow1 = link.querySelector('.arrow-1');
        const arrow2 = link.querySelector('.arrow-2');

        arrow1.classList.toggle('hidden');
        arrow2.classList.toggle('hidden');

        const otherLinks = document.querySelectorAll('.nav-item:not(#' + link.id + ')');
        otherLinks.forEach((otherLink) => {
            const otherArrow1 = otherLink.querySelector('.arrow-1');
            const otherArrow2 = otherLink.querySelector('.arrow-2');
            otherArrow1.classList.remove('hidden');
            otherArrow2.classList.add('hidden');
        });
    }

    // Tambahkan event listener untuk setiap link
    produkLink.addEventListener('click', function(event) {
        event.preventDefault();
        toggleDropdown(this);
    });

    dataLink.addEventListener('click', function(event) {
        event.preventDefault();
        toggleDropdown(this);
    });
    </script>
</body>

</html>