<?php

use App\Models\KonsumensModel;

$user = KonsumensModel::find(session('id_user'));

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/output.css', 'resources/css/app.css'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- AOS Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Butchery | Mitra Center</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />

</head>

<body class="flex">
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="bg-white drop-shadow-md">
            <div class="pt-6 pb-7 flex items-center justify-between lg:pl-5 lg:pr-12 md:px-5">
                <div class="flex items-center">
                    <a href="/index"><img src="{{asset('assets/img_mitra_center/asset/navbar/logoButchery.svg')}}"
                            alt="LogoButchery" class="mr-5" /></a>
                    <p class="font-medium text-[24px] mt-2 text-[#999]">
                        Pusat Mitra
                    </p>
                </div>
                <div class="lg:gap-4 md:gap-1 flex items-center" id="icon-bar">
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
                    <a class="flex items-center gap-3">
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=""><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt=""
                                        class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium mr-8 text-lg cursor-default">{{$user->username}}</p>
                                </a></label>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}"
                                        class="text-[#d10b05] font-semibold hover:text-[#d10b05]">Lihat Profile</a></li>
                                <li><a href="" class="font-semibold flex justify-between">Logout <svg
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

    @vite(['resources/js/tambahProduk.js', 'resources/js/app.js',
    'resources/jquery/code.jquery.com_jquery-3.7.1.min.js'])
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