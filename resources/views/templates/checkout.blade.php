<?php

use App\Models\KonsumensModel;
use App\Models\SuppliersModel;
use App\Models\CheckOutModel;
use App\Models\PurchaseModel;

$user = KonsumensModel::find(session('id_user'));
$supplier = SuppliersModel::where('user_id',session('id_user'))->first();
$purchase = PurchaseModel::where('id_user',session('id_user'))->first();
$checkout = CheckOutModel::where('user_id',session('id_user'))->first();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-SpSU-pEjrIfuDEE7"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

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

    .harga-item.checkbox-error {
        border-color: #d10b05 !important;
    }

    .harga-item.checkbox-error:checked {
        background-color: #d10b05 !important;
        border-color: #fff !important;
    }

    .harga-item.checkbox-error:checked::before {
        color: #fff !important;
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

        <div class="bg-white drop-shadow-md sm:hidden">
            <div class="lg:pt-6 lg:pb-7 py-2 items-center justify-between flex lg:px-10 px-2 lg:mr-5">
                <div class="flex items-center">
                    <button class="" onclick="my_modal_2.showModal()"><img
                            src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}" alt="LogoButchery"
                            class="mr-5 sm:hidden" /></button>
                    <dialog id="my_modal_2" class="modal">
                        <div class="modal-box text-center">
                            <h1 class="font-semibold text-[26px]">Kembali Ke Keranjang?</h1>
                            <p class="mt-2">Perubahan yang Anda lakukan di halaman ini tidak akan disimpan</p>
                            <form method="dialog">
                                <button
                                    class="border-2 py-2 w-full bg-[#D10B05] border-[#D10B05] text-white font-semibold rounded-md mt-8 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                                    Tetap Di Halaman Ini</button>
                            </form>
<<<<<<< HEAD
                            <form action="/cart/{{session('id_user')}}">
                                <button
                                    class="border-2 py-2 w-full border-[#D10B05] text-[#D10B05] font-semibold rounded-md mt-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out">Kembali
                                    & Hapus
                                    Perubahan</button>
=======
                            <form action="/hapusCheckOut" method = "POST">
                                @csrf
                                <input type="hidden" name = "id_purchase" value = "{{(isset($purchase->_id) ? $purchase->_id : '')}}">
                                <input type="hidden" name = "id_checkout" value = "{{$checkout->_id}}">
                                <input type="hidden" name = "id_user" value = "{{$user->_id}}">
                                <button class="border-2 py-2 w-full border-[#D10B05] text-[#D10B05] font-semibold rounded-md mt-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-in-out">
                                    Kembali & Hapus Perubahan</button>
>>>>>>> f77fdb57c30bc157ac7c514df50ae1af66b0a2c5
                            </form>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button class="cursor-default">close</button>
                        </form>
                    </dialog>
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