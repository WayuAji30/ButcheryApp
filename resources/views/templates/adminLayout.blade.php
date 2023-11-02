<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <a href="/index"><img src="{{asset('assets/img_mitra_center/asset/navbar/logoButchery.svg')}}" alt="LogoButchery" class="mr-5" /></a>
                    <p class="font-medium text-[24px] mt-2 text-[#999]">
                        Admin
                    </p>
                </div>
                <div class="lg:gap-4 md:gap-1 flex items-center" id="icon-bar">
                    <a class="flex items-center gap-3">
                        <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                            <label tabindex="0" class=""><a class="flex items-center gap-2" id="profile" data-id="">
                                    <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt="" class="border-2 border-[#D10B05] rounded-full" />
                                    <p class="font-medium mr-8 text-lg cursor-default">Admin Service Butchery</p>
                                </a></label>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/logout" class="font-semibold flex justify-between">Logout <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
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


    @vite(['resources/js/hapusProduk.js','resources/js/search.js','resources/js/app.js', 'resources/js/hapusRReviews.js', 'resources/js/live_search.js'])

    <!-- AOS Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>