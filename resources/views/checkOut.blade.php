@extends('templates.cart-checkout')
@section('content')

<!-- CART -->
<div class="container lg:pt-[201px] md:pt-32">
    <div class="grid grid-cols-12">
        <div class="lg:col-span-8 col-span-12 sm:text-sm sm:px-3">
            <div class="lg:ml-24 md:ml-10">
                <button class="text-[#D10B05] text-[20px] pb-4 px-12 border-b-4 border-[#D10B05] font-medium cursor-default">
                    Checkout
                </button>
            </div>
            <div class="lg:ml-24 md:mx-10">
                <!-- Product -->
                <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="black" d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
                        </svg>
                        <p class="font-semibold text-[18px]">Produk Pesanan</p>
                    </div>
                    <div class="flex items-center mt-3">
                        <img src="{{asset('assets/img_index/asset/cart/produk.png')}}" alt="" class="rounded-md" />
                        <ul class="ml-6">
                            <li>
                                Daging US Beef Slice Premium <br />
                                Quality -
                                <span class="text-[#D10B05] font-semibold">1kg</span>
                            </li>
                            <li class="font-semibold mt-4">Rp<span>169.500</span></li>
                        </ul>
                    </div>
                    <div class="mt-10"></div>
                </div>
                <!-- Alamat -->
                <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
                    <div class="flex items-center justify-between lg:mr-8">
                        <div class="flex items-center sm:justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="black" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                            </svg>
                            <p class="font-semibold text-[18px]">Alamat Pengiriman</p>
                        </div>
                        <form action="">
                            <button class="text-[#D10B05] font-semibold hover:text-[#9F0804]">Ubah</button>
                        </form>
                    </div>
                    <div class="mt-3">
                        <p id="alamat-user">
                            Perumahan Satoru Residance, Jl Srimahi 39, Blok E4 No. 13,
                            <br />
                            RT 09 RW 02 Jawa Barat, Jawa Barat, Bandung
                        </p>
                        <p class="font-semibold mt-4" id="phone-user">
                            (+62)876526765142
                        </p>
                    </div>
                    <div class="mt-10"></div>
                </div>
                <!-- Payment -->
                <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
                    <div class="flex items-center justify-between mr-8">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28 28">
                                <path fill="black" d="M5.754 5a3.75 3.75 0 0 0-3.75 3.75v.75H26v-.75A3.75 3.75 0 0 0 22.25 5H5.755Zm-3.75 14.25V11H26v8.25A3.75 3.75 0 0 1 22.25 23H5.755a3.75 3.75 0 0 1-3.75-3.75ZM18.25 16.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" />
                            </svg>
                            <p class="font-semibold text-[18px]">Metode Pembayaran</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <form action="">
                            <div class="flex mt-5 gap-5">
                                <button class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/BCA.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/BNI.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/BRI.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/Mandiri.svg')}}" alt="" />
                                </button>
                            </div>
                            <div class="flex mt-5 gap-5">
                                <button class="bg-white px-2 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/BSI.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/Permata.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-3 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/CimbNiaga.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-4 py-2 shadow-md rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/SeaBank.svg')}}" alt="" />
                                </button>
                            </div>
                            <div class="flex mt-5 gap-5">
                                <button class="bg-white px-4 py-2 shadow-lg rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/ovo.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-3 py-2 shadow-lg rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/dana.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-4 py-2 shadow-lg rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/gopay.svg')}}" alt="" />
                                </button>
                                <button class="bg-white px-5 py-2 shadow-lg rounded-lg border-2 border-slate-100 " form="none">
                                    <img src="{{asset('assets/img_index/asset/footer/spay.svg')}}" alt="" />
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-10"></div>
                </div>
                <!-- Pengiriman -->
                <div class="w-[100%] bg-white mt-8">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="black" d="M3 13.5L2.25 12H7.5l-.6-1.5H2L1.25 9h7.8l-.6-1.5H1.11L.25 6H4a2 2 0 0 1 2-2h12v4h3l3 4v5h-2a3 3 0 0 1-3 3a3 3 0 0 1-3-3h-4a3 3 0 0 1-3 3a3 3 0 0 1-3-3H4v-3.5H3m16 5a1.5 1.5 0 0 0 1.5-1.5a1.5 1.5 0 0 0-1.5-1.5a1.5 1.5 0 0 0-1.5 1.5a1.5 1.5 0 0 0 1.5 1.5m1.5-9H18V12h4.46L20.5 9.5M9 18.5a1.5 1.5 0 0 0 1.5-1.5A1.5 1.5 0 0 0 9 15.5A1.5 1.5 0 0 0 7.5 17A1.5 1.5 0 0 0 9 18.5Z" />
                        </svg>
                        <p class="font-semibold text-[18px]">Opsi Pengiriman</p>
                    </div>
                    <div class="mt-3">
                        <button class="pl-5 py-2 border-l-4 border-[#D10B05]">
                            <div class="flex items-center sm:justify-between font-semibold gap-12">
                                <p class="text-[20px] sm:text-[18px]">Motor (1-2)</p>
                                <p class="text-[18px] sm:text-[18px] text-[#D10B05]">
                                    Rp<span>9.900</span>
                                </p>
                            </div>
                            <p class="text-start mt-2 text-[#999]">
                                Pengiriman menggunakan kendaraan motor. Digunakan untuk
                                <br class="lg:block sm:hidden" />
                                pengiriman 1 hari sampai dan jarak dekat.
                            <p class="text-start mt-3 text-[#ff4444] hidden">* Tidak memenuhi minimum pemesanan</p>
                            </p>
                        </button>
                        <button class="pl-5 py-2 border-l-4 border-[#ccc] mt-4">
                            <div class="flex items-center sm:justify-between font-semibold gap-12">
                                <p class="text-[20px] sm:text-[18px] text-[#999]">Mobil Box (3-5 Hari)</p>
                                <p class="text-[18px] sm:text-[18px] text-[#D10B05]">
                                    Rp<span>18.900</span>
                                </p>
                            </div>
                            <p class="text-start mt-2 text-[#999]">
                                Pengiriman menggunakan kendaraan mobil box. Digunakan untuk
                                <br class="lg:block sm:hidden" />
                                pengiriman antar kota dan pembelian dalam jumlah tertentu.
                            </p>
                            <p class="text-start mt-3 text-[#ff4444] ">* Tidak memenuhi minimum pemesanan</p>
                        </button>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div class="lg:col-span-4 col-span-12 lg:mt-0 md:mt-10 mt-10">
            <div class="grid justify-items-center">
                <div class="lg:w-[75%] md:w-[80%] w-full lg:border-2 border-t-2 border-[#CCC] lg:rounded-3xl">
                    <div class="lg:m-7 sm:mx-4 sm:mb-4">
                        <div class="collapse collapse-arrow lg:hidden">
                            <input type="checkbox" />
                            <div class="collapse-title text-xl font-medium">
                                <p class="text-[16px] font-semibold">Rincian Belanjaan</p>
                            </div>
                            <div class="collapse-content text-sm">
                                <div class="flex items-center justify-between">
                                    <p class="">Total Harga (1 Produk)</p>
                                    <p>Rp<span id="harga-barang">169.500</span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between">
                                    <p class="">Total Ongkos Kirim</p>
                                    <p>Rp<span id="ongkir">9.900</span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between">
                                    <p class="">Biaya Layanan Aplikasi</p>
                                    <p>Rp<span id="layanan">1.000</span></p>
                                </div>
                            </div>
                        </div>
                        <p class="text-[18px] font-semibold lg:block hidden">Rincian Belanjaan</p>
                        <div class="flex items-center mt-5 justify-between sm:hidden">
                            <p class="">Total Harga (1 Produk)</p>
                            <p>Rp<span id="harga-barang">169.500</span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between sm:hidden">
                            <p class="">Total Ongkos Kirim</p>
                            <p>Rp<span id="ongkir">9.900</span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between sm:hidden">
                            <p class="">Biaya Layanan Aplikasi</p>
                            <p>Rp<span id="layanan">1.000</span></p>
                        </div>
                        <div class="border-t-2 border-solid border-[#E6E6E6] lg:mt-5 mt-0"></div>
                        <div class="flex items-center justify-between lg:mt-8 mt-3 sm:text-[14px]">
                            <p class="text-[#999] font-medium">Total Belanja</p>
                            <p class="lg:text-[24px] text-[18px] font-semibold">
                                Rp<span id="harga-total">185.000</span>
                            </p>
                        </div>
                        <form action="" class="lg:mt-6 mt-3">
                            <button class="py-2 lg:px-7 md:px-4 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                                Buat Pesanan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART -->
<div class="lg:mt-20 sm:mt-5"></div>

@vite('resources/js/app.js')
@endsection