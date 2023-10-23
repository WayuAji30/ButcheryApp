@extends('templates.notif')
@section('content')

<!-- PROFILE -->
<div class="container pt-52 pb-5">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center">
                <div class="bg-white rounded-md w-[80%] shadow-md">
                    <p class="mt-7">
                        <a href=""
                            class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium">Daftar
                            Pesanan</a>
                    </p>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <!-- TABLE -->
                    <table class=" w-full mt-5 mb-5">
                        <thead>
                            <tr class="text-[#787878] font-semibold border-b-2 border-[#e6e6e6] w-full text-center  ">
                                <th colspan="2" class="py-4">Info Produk</th>
                                <th class="py-4">Harga</th>
                                <th class="py-4">Varian</th>
                                <th class="py-4">Status</th>
                                <th class="py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody data-aos="fade-right" data-aos-duration="400" data-aos-easing="ease-in-out">
                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt=""
                                        class="rounded-md">
                                </td>
                                <td>
                                    <ul>
                                        <li class="font-semibold">Daging US Beef Slice Premium Quality 1kg</li>
                                        <li class="text-[#999] mt-1">YusupAnjayMabar</li>
                                    </ul>
                                </td>
                                <td class="text-center">Rp169.500</td>
                                <td class="text-center">250gr</td>
                                <td class="text-center">Kurir menuju toko anda</td>
                                <td class="text-center">
                                    <button
                                        class="border-2 border-[#ccc] py-2 px-10 rounded-md font-semibold text-[#ccc] mr-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">Nilai</button>
                                    <button
                                        class="border-2 border-[#D10B05] bg-[#d10b05] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Dikirim</button>
                                </td>
                            </tr>

                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt=""
                                        class="rounded-md">
                                </td>
                                <td>
                                    <ul>
                                        <li class="font-semibold">Daging US Beef Slice Premium Quality 1kg</li>
                                        <li class="text-[#999] mt-1">YusupAnjayMabar</li>
                                    </ul>
                                </td>
                                <td class="text-center">Rp169.500</td>
                                <td class="text-center">250gr</td>
                                <td class="text-center">Kurir menuju toko anda</td>
                                <td class="text-center">
                                    <button
                                        class="border-2 border-[#D10B05] py-2 px-10 rounded-md font-semibold text-[#D10B05] mr-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">Nilai</button>
                                    <button
                                        class="border-2 border-[#ccc] bg-[#ccc] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Dikirim</button>
                                </td>
                            </tr>

                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt=""
                                        class="rounded-md">
                                </td>
                                <td>
                                    <ul>
                                        <li class="font-semibold">Daging US Beef Slice Premium Quality 1kg</li>
                                        <li class="text-[#999] mt-1">YusupAnjayMabar</li>
                                    </ul>
                                </td>
                                <td class="text-center">Rp169.500</td>
                                <td class="text-center">250gr</td>
                                <td class="text-center">Kurir menuju toko anda</td>
                                <td class="text-center">
                                    <button
                                        class="border-2 border-[#D10B05] py-2 px-10 rounded-md font-semibold text-[#D10B05] mr-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">Nilai</button>
                                    <button
                                        class="border-2 border-[#ccc] bg-[#ccc] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Dikirim</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- PROFILE -->

@endsection