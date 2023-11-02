@extends('../templates/mitra-layout')
@section('content')
<?php

use App\Models\KonsumensModel;
use App\Models\SuppliersModel;
use App\Models\PurchaseModel;

$user = KonsumensModel::find(session('id_user'));
$order = PurchaseModel::where('id_user',$user->id_user)->first();
$supplier = SuppliersModel::where('user_id',session('id_user'))->first();

?>

<!-- Navbar kiri -->
<aside class="relative pt-20 h-screen w-64 hidden lg:block md:block shadow-xl bg-white">
    <nav class="">
        <div class="px-6 pt-[36px]">
            <h1 class="flex items-center font-semibold text-[18px]">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="#2b2b2b"
                        d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                </svg>Toko Saya
            </h1>
            <div class="ml-10">
                <p class="mt-3 text-[#999]">Transaksi Bulan Ini</p>
                <p class="font-semibold mt-1">Rp<span>0</span></p>
                <p class="mt-5 text-[#999]">Total Transaksi</p>
                <p class="font-semibold mt-1">Rp<span>0</span></p>
            </div>
        </div>

        <div class="border-t-2 border-solid border-[#E6E6E6] mt-5 mx-4"></div>

        <a href="" class="nav-item" id="produk">
            <h1 class="flex items-center font-semibold px-6 pt-6 text-[18px]">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="#2b2b2b"
                        d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1V3zM4 5h16v2H4V5zm15 15H5V9h14v11zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z" />
                </svg>
                Produk
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_down.svg')}}" alt="" class="ml-2 arrow-1">
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_up.svg')}}" alt=""
                    class="ml-2 arrow-2 hidden">
            </h1>
        </a>
        <div class="font-medium hidden" id="menu-produk">
            <p class="mt-4">
                <a href="/tambahProduk"
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px] ">Tambah
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="/daftarProduk/{{$supplier->_id}}"
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Daftar
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="" class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Pelanggaran
                    Produk</a>
            </p>
        </div>
        <a href="/pesanan/{{$supplier->_id}}" class="flex items-center active-nav-link cta-btn py-4 pl-6 nav-item">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#2b2b2b"
                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
            </svg>
            <p class="font-semibold text-[18px]">Pesanan</p>
        </a>

        <a href="/langganan" class="flex items-center active-nav-link cta-btn pb-4 pl-6 nav-item">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 13v2h16v-2H4ZM4 2h16q.825 0 1.413.588T22 4v11q0 .825-.588 1.413T20 17h-4v5l-4-2l-4 2v-5H4q-.825 0-1.413-.588T2 15V4q0-.825.588-1.413T4 2Zm0 8h16V4H4v6Zm0 5V4v11Z" />
            </svg>
            <p class="font-semibold text-[18px]">Langganan</p>
        </a>

        <a href="" class="nav-item" id="data">
            <h1 class="flex items-center font-semibold px-6 text-[18px]">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="#2b2b2b"
                        d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1V3zM4 5h16v2H4V5zm15 15H5V9h14v11zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z" />
                </svg>
                Data
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_down.svg')}}" alt="" class="ml-2 arrow-1">
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_up.svg')}}" alt=""
                    class="ml-2 arrow-2 hidden">
            </h1>
        </a>
        <div class="font-medium hidden" id="menu-data">
            <p class="mt-4">
                <a href="/trenDaging" class="text-[#D10B05] border-l-4 py-2 border-[#D10B05] pl-[58px]">Tren
                    Daging</a>
            </p>
            <p class="mt-4">
                <a href=""
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Pengunjung</a>
            </p>
            <p class="mt-4">
                <a href="" class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Pembeli</a>
            </p>
        </div>
    </nav>
</aside>
<!-- Navbar kiri -->


<div class="w-full h-screen bg-[#f3f3f3] overflow-x-hidden border-t flex flex-col">
    <!-- TREN NAV -->
    <div class="flex ml-8 gap-8">
        <div class="mt-32 bg-white w-96 h-28 shadow-md rounded-r-lg border-l-8 border-[#D10b05]" data-aos="zoom-in-up"
            data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="font-medium text-[#D10b05] ml-7 mt-7">
                Prediksi Tren Daging Bulan Ini
            </p>
            <p class="font-semibold text-[20px] ml-7">Daging Ayam</p>
        </div>
        <div class="mt-32 bg-white w-96 h-28 shadow-md rounded-r-lg border-l-8 border-[#D10b05]" data-aos="zoom-in-up"
            data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="font-medium text-[#D10b05] ml-7 mt-7">
                Tren Daging Bulan Lalu
            </p>
            <p class="font-semibold text-[20px] ml-7">Daging Sapi</p>
        </div>
        <div class="mt-32 bg-white w-96 h-28 shadow-md rounded-r-lg border-l-8 border-[#D10b05]" data-aos="zoom-in-up"
            data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="font-medium text-[#D10b05] ml-7 mt-7">
                Tidak Diminati Bulan Lalu
            </p>
            <p class="font-semibold text-[20px] ml-7">Daging Puyuh</p>
        </div>
    </div>
    <!-- TREN NAV -->

    <div class="flex gap-9 ml-8">
        <!-- GRAFIK -->
        <div class="mt-8 bg-white w-[62%] rounded-lg h-[450px] shadow-md" data-aos="zoom-in-up"
            data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="mt-4">
                <a class="text-[#D10B05] pb-4 px-11 border-b-4 border-[#D10B05] font-medium">Grafik Minat Daging
                </a>
            </p>
            <div class="border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
            <!-- <img src="{{asset('assets/img_mitra_center/asset/trenDaging/chart.png')}}" alt=""
                class="ml-14 mt-5 lg:w-fit md:w-[80%] sm:w[50%]" /> -->
            <canvas class="p-6" id="chartLine"></canvas>
        </div>
        <!-- GRAFIK -->

        <!-- TOP 5 DAGING -->
        <div class="mt-8 bg-white w-[30%] rounded-r-lg h-96 shadow-md" data-aos="zoom-in-up"
            data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
            <p class="mt-4">
                <a class="text-[#D10B05] pb-4 px-11 border-b-4 border-[#D10B05] font-medium">Top 5 Daging Bulan
                    Lalu</a>
            </p>
            <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
            <table class="table-auto w-full mt-3 h-72">
                <tbody>
                    <tr class="border-b-2 border-[#e6e6e6]">
                        <td>
                            <span
                                class="text-[#d10b05] border-2 rounded-full ml-5 px-3 py-1 border-[#d10b05] font-semibold">
                                1
                            </span>
                        </td>
                        <td class="text-[18px] font-medium">Daging Ayam</td>
                        <td class="text-[#999]">1,2 Rb Terjual</td>
                    </tr>
                    <tr class="border-b-2 border-[#e6e6e6]">
                        <td>
                            <span
                                class="text-[#d10b05] border-2 rounded-full px-3 py-1 ml-5 border-[#d10b05] font-semibold">
                                2
                            </span>
                        </td>
                        <td class="text-[18px] font-medium">Daging Sapi</td>
                        <td class="text-[#999]">802 Terjual</td>
                    </tr>
                    <tr class="border-b-2 border-[#e6e6e6]">
                        <td>
                            <span
                                class="text-[#d10b05] border-2 rounded-full px-3 py-1 ml-5 border-[#d10b05] font-semibold">
                                3
                            </span>
                        </td>
                        <td class="text-[18px] font-medium">Daging Ikan</td>
                        <td class="text-[#999]">605 Terjual</td>
                    </tr>
                    <tr class="border-b-2 border-[#e6e6e6]">
                        <td>
                            <span
                                class="text-[#d10b05] border-2 rounded-full px-3 py-1 ml-5 border-[#d10b05] font-semibold">
                                4
                            </span>
                        </td>
                        <td class="text-[18px] font-medium">Udang</td>
                        <td class="text-[#999]">322 Terjual</td>
                    </tr>
                    <tr>
                        <td>
                            <span
                                class="text-[#d10b05] border-2 rounded-full px-3 py-1 ml-5 border-[#d10b05] font-semibold">
                                5
                            </span>
                        </td>
                        <td class="text-[18px] font-medium">Daging Bebek</td>
                        <td class="text-[#999]">215 Terjual</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- TOP 5 DAGING -->
</div>

@endsection