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
    @vite(['resources/css/app.css', 'resources/css/ouput.css','resources/jquery/code.jquery.com_jquery-3.7.1.min.js'])

    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    #remove button:hover svg path {
        fill: #d10b05;
    }

    button.active {
        border-color: #d10b05;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="lg:block md:hidden">
            <div class="bg-[#D10B05] py-4 lg:block hidden">
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
            <div class="lg:pt-6 lg:pb-7 py-2 items-center justify-between flex lg:px-10 px-2 lg:mr-5">
                <div class="flex items-center">
                    <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}"
                            alt="LogoButchery" class="mr-5 lg:block hidden" /></a>
                </div>
                <div class="lg:gap-3 md:gap-1 flex items-center" id="icon-bar">
                    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                        <label tabindex="0" class=" "><a class="flex items-center gap-2" id="profile" data-id="">
                                <img src="{{asset('assets/img_mitra_center/asset/navbar/profile.svg')}}" alt=""
                                    class="border-2 border-[#D10B05] rounded-full sm:w-8" />
                                <p class="font-medium lg:text-lg sm:text-xs lg:mr-8 sm:mr-4">{{$user->username}}</p>
                            </a></label>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/profile/{{$user->_id}}/{{{$user['alamat'][0]['provinsi']}}}/{{{$user['alamat'][0]['kota/kab']}}}/{{{$user['alamat'][0]['kecamatan']}}}"
                                    class="text-[#d10b05] font-semibold hover:text-[#d10b05]">Lihat Profile</a></li>
                            <li><a href="/logout" class="font-semibold flex justify-between">Logout <svg
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5zm16 7l-4-4v3H9v2h8v3l4-4z" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')