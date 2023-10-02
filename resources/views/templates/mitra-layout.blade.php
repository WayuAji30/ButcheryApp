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
                <div class="lg:gap-3 md:gap-1 flex items-center" id="icon-bar">
                    <a href="" class="p-1 rounded-lg hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g fill="none" stroke="#454545" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 19v-9a6 6 0 0 1 6-6v0a6 6 0 0 1 6 6v9M6 19h12M6 19H4m14 0h2m-9 3h2" />
                                <circle cx="12" cy="3" r="1" />
                            </g>
                        </svg>
                    </a>
                    <a href=""><img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt=""
                            class="border-2 border-[#D10B05] rounded-full" /></a>
                    <p class="font-medium">Rahmat Messi Talahu</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->
    @yield('content')

    <!-- @vite('resources/js/hamburgerToggle.js') -->
    @vite(['resources/js/tambahProduk.js', 'resources/js/app.js'])
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
</body>

</html>