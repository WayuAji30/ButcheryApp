@extends('../templates/mitra-layout')
@section('content')
<?php

use App\Models\KonsumensModel;
use App\Models\SuppliersModel;

$user = KonsumensModel::find(session('id_user'));
$supplier = SuppliersModel::where('user_id', session('id_user'))->first();

?>



@if (!session()->has('login'))
<script>
document.location.href = "/login";
</script>
@endif

<!-- Navbar kiri -->
<aside class="relative pt-20 h-screen w-64 hidden lg:block shadow-xl bg-white">
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
                <p class="font-semibold mt-1">Rp<span>{{number_format($transaksi,0,",")}}</span></p>
                <p class="mt-5 text-[#999]">Total Transaksi</p>
                <p class="font-semibold mt-1">Rp<span>{{number_format($transaksi,0,",")}}</span></p>
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
                    class="hover:text-[#D10B05] text-[#999] border-l-4 py-2 border-white pl-[58px]">Daftar
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="" class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Pelanggaran
                    Produk</a>
            </p>
        </div>
        <a href="/pesanan/{{$supplier->_id}}" class="flex items-center active-nav-link cta-btn py-2 mt-2 pl-6 nav-item">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#000"
                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
            </svg>
            <p class="font-semibold text-[18px]">Pesanan</p>
        </a>

        <a href="/langganan"
            class="flex items-center active-nav-link cta-btn py-2 mb-2 pl-5 nav-item border-l-4 border-[#d10b05]">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#d10b05"
                    d="M4 13v2h16v-2H4ZM4 2h16q.825 0 1.413.588T22 4v11q0 .825-.588 1.413T20 17h-4v5l-4-2l-4 2v-5H4q-.825 0-1.413-.588T2 15V4q0-.825.588-1.413T4 2Zm0 8h16V4H4v6Zm0 5V4v11Z" />
            </svg>
            <p class="font-semibold text-[18px] text-[#d10b05]">Langganan</p>
        </a>

        <a href="" class="nav-item" id="data">
            <h1 class="flex items-center font-semibold px-6 text-[18px]">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 22 22"
                    fill="none">
                    <path
                        d="M2.75 2.75V17.4167C2.75 17.9029 2.94315 18.3692 3.28697 18.713C3.63079 19.0568 4.0971 19.25 4.58333 19.25H19.25"
                        stroke="black" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6.41797 12.8335L10.0846 9.16683L13.7513 12.8335L19.2513 7.3335" stroke="black"
                        stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.5 7.3335H19.25V10.0835" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                Data
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_down.svg')}}" alt="" class="ml-2 arrow-1">
                <img src="{{asset('assets/img_mitra_center/asset/navbar/arrow_up.svg')}}" alt=""
                    class="ml-2 arrow-2 hidden">
            </h1>
        </a>
        <div class="font-medium hidden" id="menu-data">
            <p class="mt-4">
                <a href="/trenDaging"
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Tren
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
    <div
        class="lg:mt-32 md:mt-24 mt-[75px] bg-white rounded-2xl sm:rounded-none w-[97%] sm:w-full md:h-screen lg:ml-4 md:mx-3 shadow-md">
        <div class="lg:ml-11 md:ml-6 ml-3">
            <p class="mt-5">
                <a class="lg:text-[28px] md:text-[24px] text-[18px] font-bold cursor-default">Beli Langganan</a>
            </p>
            <p class="lg:mt-5 mt-3 text-[#b3b3b3] font-medium">Beli Langganan Sekarang Agar Dapat Merasakan Semua
                Fitur
                Eksklusif Yang <br> Akan Membantu
                Anda Dalam
                Menjalankan
                Usaha Anda. Ayo Gabung Dan <br> Dapatkan Semua Benefitnya!</p>
        </div>
        <div class="flex sm:flex-col items-center lg:ml-11 md:mx-6 lg:mt-8 mt-6 md:mt-10 lg:gap-20 gap-8 mb-5">
            <div>
                <div
                    class="bg-white border-2 border-[#d10b05] rounded-2xl pt-5 lg:px-8 md:px-4 px-10 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:shadow-2xl duration-300">
                    <p class="font-medium text-[18px] ">Bronze</p>
                    <p class="lg:text-[28px] text-[24px] text-[#d10b05] font-bold">Rp120.000</p>
                    <ul class="mt-5">
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Lihat tren daging</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Durasi langganan 1 bulan</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Posisi produk prioritas</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Iklankan produkmu</li>
                    </ul>

                    <button
                        class="lg:mt-16 md:mt-8 mt-6 md:text-sm mb-8 border-2 border-[#d10b05] bg-[#d10b05] text-white w-full py-2 rounded-md font-semibold hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Beli
                        Paket</button>
                </div>
            </div>

            <div>
                <div
                    class="bg-white border-2 border-[#d10b05] rounded-2xl pt-5 lg:px-8 md:px-4 px-10 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:shadow-2xl duration-300">
                    <p class="font-medium text-[18px]">Silver</p>
                    <p class="lg:text-[28px] text-[24px] text-[#d10b05] font-bold">Rp250.000</p>
                    <ul class="mt-5">
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Lihat tren daging</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Durasi langganan 2 bulan</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Posisi produk prioritas</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Iklankan produkmu</li>
                    </ul>

                    <button
                        class="lg:mt-16 md:mt-8 mt-6 md:text-sm mb-8 border-2 border-[#d10b05] bg-[#d10b05] text-white w-full py-2 rounded-md font-semibold hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Beli
                        Paket</button>
                </div>
            </div>

            <div>
                <div
                    class="bg-white border-2 border-[#d10b05] rounded-2xl pt-5 lg:px-8 md:px-4 px-10 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:shadow-2xl duration-300">
                    <p class="font-medium text-[18px]">Gold</p>
                    <p class="lg:text-[28px] text-[24px] text-[#d10b05] font-bold">Rp350.000</p>
                    <ul class="mt-5">
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Lihat tren daging</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Durasi langganan 3 bulan</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Posisi produk prioritas</li>
                        <li class="flex items-center lg:gap-3 gap-2 font-semibold md:text-sm mt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                                class="md:w-4">
                                <path fill="#ccc" fill-rule="evenodd"
                                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z"
                                    clip-rule="evenodd" />
                            </svg> Iklankan produkmu</li>
                    </ul>

                    <button
                        class="lg:mt-16 md:mt-8 mt-6 md:text-sm mb-8 border-2 border-[#d10b05] bg-[#d10b05] text-white w-full py-2 rounded-md font-semibold hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Beli
                        Paket</button>
                </div>
            </div>
        </div>
    </div>

    @endsection