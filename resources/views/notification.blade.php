@extends('templates.notif')
@section('content')

<!-- PROFILE -->
<div class="container lg:pt-52 sm:pt-20 pb-5">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center">
                <div class="bg-white rounded-md lg:w-[80%] shadow-md">
                    <p class="mt-7">
                        <a href="" class="text-[#D10B05] text-[20px] pb-4 lg:px-11 px-4 sm:text-[16px] lg:border-b-4 border-b-2 border-[#D10B05] font-medium">Daftar
                            Pesanan</a>
                    </p>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <!-- TABLE -->
                    <table class="w-full mt-5 mb-5">
                        <thead>
                            <tr class="text-[#787878] font-semibold border-b-2 border-[#e6e6e6] w-full text-center  ">
                                <th colspan="2" class="lg:py-4">Info Produk</th>
                                <th class="lg:py-4 py-2">Harga</th>
                                <th class="lg:py-4 py-2">Varian</th>
                                <th class="lg:py-4 py-2">Status</th>
                                <th class="lg:py-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody data-aos="fade-right" data-aos-duration="400" data-aos-easing="ease-in-out">
                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="lg:pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt="" class="rounded-md">
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
                                    <!-- The button to open modal -->
                                    <label for="my_modal_7" class="border-2 border-[#ccc] py-2 px-10 rounded-md font-semibold text-[#ccc] mr-2 hover:bg-[#D10B05] hover:border-[#d10b05] hover:text-white transition-all duration-200 ease-linear cursor-pointer">Nilai</label>

                                    <!-- Put this part before </body> tag -->
                                    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box">
                                            <p class="font-semibold text-[20px] text-[#787878] mt-3">Beri Riview Produk
                                            </p>
                                            <div class="border-t-2 border-[#e6e6e6] mt-7"></div>
                                            <img src="{{asset('assets/img_index/asset/notification/profile.svg')}}" alt="" class="mx-auto my-auto border-2 border-[#d10b05] rounded-full mt-7">
                                            <div class="text-center mt-5">
                                                <p class="font-semibold text-[18px]">Rahmattahalurimek</p>
                                                <p class="text-[#787878]">Udang Vaname Segar - 1kg</p>
                                                <form action="">
                                                    <div class="rating mt-5 gap-3">
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" checked />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                    </div>
                                            </div>
                                            <textarea name="" id="" cols="46" rows="4" placeholder="Berikan Ulasan Anda" class="border-[#ccc] border-2 rounded-lg pl-4 pt-3 focus:outline-[#d10b05] mt-7"></textarea>
                                            <button for="my_modal_7" class="bg-[#d10b05] mt-8 mb-4 py-2 w-[80%] rounded-md font-semibold text-white hover:bg-[#9F0804] transition-all duration-200 ease-linear">Kirim</button>
                                            </form>
                                        </div>
                                        <label class="modal-backdrop" for="my_modal_7">Close</label>
                                    </div>
                                    <button class="bg-[#d10b05] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] transition-all duration-200 ease-linear">Sampai</button>
                                </td>
                            </tr>

                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="lg:pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt="" class="rounded-md">
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
                                    <!-- The button to open modal -->
                                    <label for="my_modal_7" class="border-2 border-[#D10B05] py-2 px-10 rounded-md font-semibold text-[#D10B05] mr-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear cursor-pointer">Nilai</label>

                                    <!-- Put this part before </body> tag -->
                                    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box">
                                            <p class="font-semibold text-[20px] text-[#787878] mt-3">Beri Riview Produk
                                            </p>
                                            <div class="border-t-2 border-[#e6e6e6] mt-7"></div>
                                            <img src="{{asset('assets/img_index/asset/notification/profile.svg')}}" alt="" class="mx-auto my-auto border-2 border-[#d10b05] rounded-full mt-7">
                                            <div class="text-center mt-5">
                                                <p class="font-semibold text-[18px]">Rahmattahalurimek</p>
                                                <p class="text-[#787878]">Udang Vaname Segar - 1kg</p>
                                                <form action="">
                                                    <div class="rating mt-5 gap-3">
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" checked />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                    </div>
                                            </div>
                                            <textarea name="" id="" cols="46" rows="4" placeholder="Berikan Ulasan Anda" class="border-[#ccc] border-2 rounded-lg pl-4 pt-3 focus:outline-[#d10b05] mt-7"></textarea>
                                            <button for="my_modal_7" class="bg-[#d10b05] mt-8 mb-4 py-2 w-[80%] rounded-md font-semibold text-white hover:bg-[#9F0804] transition-all duration-200 ease-linear">Kirim</button>
                                            </form>
                                        </div>
                                        <label class="modal-backdrop" for="my_modal_7">Close</label>
                                    </div>
                                    <button class="border-2 border-[#ccc] bg-[#ccc] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Sampai</button>
                                </td>
                            </tr>

                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="lg:pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('assets/img_mitra_center/asset/pesanan/contoh.png')}}" alt="" class="rounded-md">
                                </td>
                                <td>
                                    <ul>
                                        <li class="font-semibold">Daging US Beef Slice Premium Quality 1kg</li>
                                        <li class="text-[#999] mt-1">YusupAnjayMabar</li>
                                    </ul>
                                </td>
                                <td class="text-center">Rp169.500</td>
                                <td class="text-center">250gr</td>
                                <td class="text-center">Dikemas</td>
                                <td class="text-center">
                                    <!-- The button to open modal -->
                                    <label for="my_modal_7" class="border-2 border-[#D10B05] py-2 px-10 rounded-md font-semibold text-[#D10B05] mr-2 hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear cursor-pointer">Nilai</label>

                                    <!-- Put this part before </body> tag -->
                                    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box">
                                            <p class="font-semibold text-[20px] text-[#787878] mt-3">Beri Riview Produk
                                            </p>
                                            <div class="border-t-2 border-[#e6e6e6] mt-7"></div>
                                            <img src="{{asset('assets/img_index/asset/notification/profile.svg')}}" alt="" class="mx-auto my-auto border-2 border-[#d10b05] rounded-full mt-7">
                                            <div class="text-center mt-5">
                                                <p class="font-semibold text-[18px]">Rahmattahalurimek</p>
                                                <p class="text-[#787878]">Udang Vaname Segar - 1kg</p>
                                                <form action="">
                                                    <div class="rating mt-5 gap-3">
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" checked />
                                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-[#d10b05]" />
                                                    </div>
                                            </div>
                                            <textarea name="" id="" cols="46" rows="4" placeholder="Berikan Ulasan Anda" class="border-[#ccc] border-2 rounded-lg pl-4 pt-3 focus:outline-[#d10b05] mt-7"></textarea>

                                            <button for="my_modal_7" class="bg-[#d10b05] mt-8 mb-4 py-2 w-[80%] rounded-md font-semibold text-white hover:bg-[#9F0804] transition-all duration-200 ease-linear">Kirim</button>
                                            </form>
                                        </div>
                                        <label class="modal-backdrop" for="my_modal_7">Close</label>
                                    </div>
                                    <button class="border-2 border-[#ccc] bg-[#ccc] py-2 px-8 rounded-md font-semibold text-white mr-2 hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">Sampai</button>
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