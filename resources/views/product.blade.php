@extends('templates.search-product')
@section('content')

<!-- Product -->
<div class="lg:pt-[201px] md:pt-60 px-12 w-full">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <!-- Left -->
            <div class="lg:col-span-4 col-span-12">
                <div class="grid justify-items-center">
                    <img id="product-image" src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto1'])}}" alt="" class="w-[345px] rounded-md" />
                </div>
                <div class="flex gap-3 mt-4 lg:pl-16 lg:justify-normal md:justify-center">
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto1']}}')">
                        <img src=" {{asset('storage/img_uploaded/'.$detail_produk['foto']['foto1'])}}" alt="" class="w-[61px] rounded-md" id="foto1" />
                    </button>
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto2']}}')">
                        <img src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto2'])}}" alt="" class="w-[61px] rounded-md" />
                    </button>
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto3']}}')">
                        <img src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto3'])}}" alt="" class="w-[61px] rounded-md" />
                    </button>
                </div>
                <div class="border-t-2 border-solid border-[#E6E6E6] mt-11 mx-16"></div>

                <!-- TOKO -->
                <div class="lg:block hidden">
                    <div class="flex pl-16 mt-10 items-center">
                        <img src="{{asset('assets/img_index/asset/product/profile.svg')}}" alt="" class="" />
                        <div class="ml-4">
                            <h1 class="font-semibold">{{$detail_produk->nama_toko}}</h1>
                            <p class="text-[#999999]">{{$detail_produk['alamat_toko']['alamat']}}</p>
                        </div>
                    </div>
                    <div class="flex pl-16 mt-6 gap-4">
                        <button class="flex text-[#D10B05] bg-[#D10B05] bg-opacity-10 py-2 px-6 border-2 border-[#D10B05] items-center">
                            <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#d10b05" d="M2 22V4q0-.825.588-1.413T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H6l-4 4Zm4-8h8v-2H6v2Zm0-3h12V9H6v2Zm0-3h12V6H6v2Z" />
                            </svg>
                            Chat Seller
                        </button>
                        <button class="flex text-[#B3B3B3] py-2 px-6 border-2 border-[#B3B3B3] items-center">
                            <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#b3b3b3" d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                            </svg>
                            Lihat Toko
                        </button>
                    </div>
                </div>
                <div class="pl-16 mt-12 lg:block hidden">
                    <p>Produk lainnya dari toko ini</p>
                    <button class="flex shadow-lg w-[328px] h-24 text-[12px] font-medium text-start mt-5">
                        <img src="{{asset('assets/img_index/asset/product/lainnya1.svg')}}" alt="" />
                        <div class="flex-none pl-4 mt-3">
                            <p>Ikan Dory Fillet Premium Beku <br />Frozen kemasan 1kg</p>
                            <p class="font-semibold text-[#D10B05] text-[16px] mt-2">
                                Rp<span>54.500</span>
                            </p>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Center -->
            <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-5">
                <input type="hidden" name="id" id="id_produk" value="{{$detail_produk->_id}}">
                <h1 class="font-medium text-[24px]" id="nama_produk">{{$detail_produk->nama_produk}}</h1>
                <div class="flex">
                    <p>4.7</p>
                    <button><img src="asset/product/star.svg" alt="" /></button>
                    <p class="text-[#B3B3B3] ml-3">(<span>387</span> Penilaian) |</p>
                    <p class="ml-2"><span>672 </span>Terjual</p>
                </div>
                <p class="font-semibold text-[36px] mt-6">
                    Rp <span id="value-view"></span>
                </p>
                <section class="mt-9">
                    <p class="font-semibold text-[18px]">Pilih varian:</p>
                    <div class="flex gap-3 mt-4">
                        <button id="low" data-varian="{{$detail_produk['varian'][0]['varian1']}}" data-price="{{$detail_produk['varian'][0]['harga']}}" class="py-2 px-4 rounded-lg border-2 border-gray-300 active transition-all duration-500 ease-in-out">
                            {{$detail_produk['varian'][0]['varian1']}}
                        </button>
                        <button id="mid" data-varian="{{$detail_produk['varian'][1]['varian2']}}" data-price="{{$detail_produk['varian'][1]['harga']}}" class="py-2 px-4 rounded-lg border-2 border-gray-300 transition-all duration-500 ease-in-out">
                            {{$detail_produk['varian'][1]['varian2']}}
                        </button>
                        <button id="high" class="py-2 px-6 rounded-lg border-2 border-gray-300 transition-all duration-500 ease-in-out">
                            1kg
                        </button>
                    </div>
                </section>
                <div class="border-t-2 border-solid border-[#E6E6E6] mt-11"></div>
                <div class="lg:hidden md:block">
                    <div class="flex mt-5 items-center">
                        <img src="{{asset('assets/img_index/asset/product/profile.svg')}}" alt="" class="" />
                        <div class="ml-4">
                            <h1 class="font-semibold">{{$detail_produk->nama_toko}}</h1>
                            <p class="text-[#999999]">{{$detail_produk['alamat_toko']['alamat']}}</p>
                        </div>
                    </div>
                    <div class="flex mt-6 gap-4">
                        <button class="flex text-[#D10B05] bg-[#D10B05] bg-opacity-10 py-2 px-6 border-2 border-[#D10B05] items-center">
                            <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#d10b05" d="M2 22V4q0-.825.588-1.413T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H6l-4 4Zm4-8h8v-2H6v2Zm0-3h12V9H6v2Zm0-3h12V6H6v2Z" />
                            </svg>
                            Chat Seller
                        </button>
                        <button class="flex text-[#B3B3B3] py-2 px-6 border-2 border-[#B3B3B3] items-center">
                            <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#b3b3b3" d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                            </svg>
                            Lihat Toko
                        </button>
                    </div>
                </div>
                <div class="flex gap-14 mt-9">
                    <p class="font-semibold pb-3 text-[#d10b05] border-b-2 border-[#d10b05]">
                        Deskripsi Produk
                    </p>
                </div>
                <p class="mt-8">
                    {{$detail_produk->deskripsi}}
                </p>

                <div class="border-t-2 border-solid border-[#E6E6E6] mt-11"></div>
                <div class="mt-8">
                    <button class="text-[#D10B05] font-medium border-b-2 border-[#D10B05] py-2 cursor-default">
                        Pengiriman
                    </button>
                    <div class="mt-5">
                        <p class="flex">
                            <img class="pr-3" src="{{asset('assets/img_index/asset/product/ion_location-sharp.svg')}}" alt="" />Dikirim dari
                            <span class="font-semibold pl-1">{{$detail_produk['alamat_toko']['alamat']}}</span>
                        </p>
                        <p class="flex mt-4">
                            <img class="pr-3" src="{{asset('assets/img_index/asset/product/mdi_courier-fast.svg')}}" alt="" />Pengiriman ke

                            <select name="" id="" class="font-medium">
                                <option value="">Bogor Utara</option>
                                <option value="">Kota Bogor</option>
                                <option value="">Cibinong</option>
                            </select>
                        </p>
                        <p class="ml-8">Ongkos kirim : Rp0 - Rp13.000</p>
                        <p class="mt-5">
                            Butchery dapat melakukan pengiriman antar kota <br class="md:hidden" />
                            dengan mobil box berpendingin untuk menjaga <br class="md:hidden" />
                            kualitas daging tetap sempurna saat sampai ke <br class="md:hidden" />
                            tangan customer.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div class="lg:col-span-4 md:col-span-6 sm:col-span-12 ml-8 lg:mt-0 md:mt-5">
                <div class="grid justify-items-center">
                    <div class="lg:w-[75%] md:w-[100%] h-[100%] border-2 border-[#CCC] rounded-3xl">
                        <div class="m-7">
                            <p class="text-[18px] font-semibold">Siapkan Pesanan</p>
                            <form action="/checkOut">
                                <div class="flex items-center mt-6 justify-between">
                                    <div class="flex w-[50%] h-11 items-center border-2 border-[#D10B05] justify-between rounded-lg text-[18px] font-semibold">
                                        <button class="pl-5" id="mines" form="" onclick="">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path id="minusSign" d="M15.8332 10.8317H4.1665V9.16504H15.8332V10.8317Z" fill="#CCCCCC" />
                                            </svg>
                                        </button>
                                        <p id="value-product"></p>
                                        <button class="pr-5" id="plus" form="none" onclick="">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.9998 10.8317H10.8332V14.9984C10.8332 15.2194 10.7454 15.4313 10.5891 15.5876C10.4328 15.7439 10.2209 15.8317 9.99984 15.8317C9.77882 15.8317 9.56686 15.7439 9.41058 15.5876C9.2543 15.4313 9.1665 15.2194 9.1665 14.9984V10.8317H4.99984C4.77882 10.8317 4.56686 10.7439 4.41058 10.5876C4.2543 10.4313 4.1665 10.2194 4.1665 9.99837C4.1665 9.77736 4.2543 9.5654 4.41058 9.40912C4.56686 9.25284 4.77882 9.16504 4.99984 9.16504H9.1665V4.99837C9.1665 4.77736 9.2543 4.5654 9.41058 4.40912C9.56686 4.25284 9.77882 4.16504 9.99984 4.16504C10.2209 4.16504 10.4328 4.25284 10.5891 4.40912C10.7454 4.5654 10.8332 4.77736 10.8332 4.99837V9.16504H14.9998C15.2209 9.16504 15.4328 9.25284 15.5891 9.40912C15.7454 9.5654 15.8332 9.77736 15.8332 9.99837C15.8332 10.2194 15.7454 10.4313 15.5891 10.5876C15.4328 10.7439 15.2209 10.8317 14.9998 10.8317Z" fill="#D10B05" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="">
                                        Sisa Stok:
                                        <span class="font-semibold" id="value-stok">{{$detail_produk['varian'][0]['stok']}} /
                                            {{$detail_produk['varian'][1]['stok']}}</span>
                                    </p>
                                </div>
                                <p class="mt-7">
                                    Pilihan Varian:
                                    <span class="font-semibold" id="item-weight"></span>
                                </p>
                                <div class="border-t-2 border-solid border-[#E6E6E6] mt-2"></div>
                                <div class="mt-5">
                                    <textarea class="peer block min-h-[auto] mx-auto w-full mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" id="catatan" rows="4" placeholder="Tambahkan Catatan"></textarea>
                                </div>
                                <div class="flex justify-between mx-1 mt-6">
                                    <p class="text-[#999] font-medium">Subtotal</p>
                                    <p class="font-semibold text-[20px]">
                                        Rp <span id="total-value"></span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mt-6">
                                    <button class="text-[#D10B05] py-2 px-8 border-2 border-[#D10B05] rounded-md font-medium hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">
                                        Beli
                                    </button>
                                    <a href="javascript:void(0);" id="addToCart" data-id="{{session('id_user')}}" class="py-2 lg:px-5 md:px-4 border-2 border-[#D10B05] bg-[#D10B05] text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">
                                        + Keranjang
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lg:ml-14 md:ml-4 mt-14">
                    <p class="text-[#D10B05] font-semibold">Ulasan Pembeli</p>
                    <div class="flex items-center gap-2 mt-3">
                        <img src="{{asset('assets/img_index/asset/product/ic_round-star.svg')}}" alt="" />
                        <p class="text-[60px] font-medium" id="value-rating">4.7</p>
                        <p class="text-[#CCC] mt-9">
                            <span>672</span> Terjual | <span>328</span> Penilaian
                        </p>
                    </div>
                </div>
                <div class="ml-14 mt-9">
                    <!-- Review 1 -->
                    <div class="flex items-start gap-5">
                        <img src="{{asset('assets/img_index/asset/product/Reviewer001.svg')}}" alt="" />
                        <ul>
                            <li class="flex">
                                <p class="font-semibold mr-3">Freya Jayawardana</p>
                                <p class="text-[#b3b3b3]">4 hari lalu</p>
                            </li>
                            <li>
                                <img src="{{asset('assets/img_index/asset/product/starReview.svg')}}" alt="" class="mt-1" />
                            </li>
                            <li>
                                <p class="mt-2">
                                    Pesanan semua lengkap & datang sesuai jadwal,terima kasih.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="border-t-2 border-solid border-[#E6E6E6] mt-8 mx-3"></div>
                    <!-- Review 1 -->

                    <!-- Review 2 -->
                    <div class="flex items-start gap-5 mt-5">
                        <img src="{{asset('assets/img_index/asset/product/Reviewer002.svg')}}" alt="" />
                        <ul>
                            <li class="flex">
                                <p class="font-semibold mr-3">Fiony Alveria Tantri</p>
                                <p class="text-[#b3b3b3]">4 hari lalu</p>
                            </li>
                            <li>
                                <img src="{{asset('assets/img_index/asset/product/starReview.svg')}}" alt="" class="mt-1" />
                            </li>
                            <li>
                                <p class="mt-2">
                                    harganya murah kwalitas dagingnya bagus sll puas belanja
                                    disini.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="border-t-2 border-solid border-[#E6E6E6] mt-8 mx-3"></div>
                    <!-- Review 2 -->

                    <!-- Review 3 -->
                    <div class="flex items-start gap-5 mt-5">
                        <img src="{{asset('assets/img_index/asset/product/Reviewer003.svg')}}" alt="" />
                        <ul>
                            <li class="flex">
                                <p class="font-semibold mr-3">Gita Sekar Andarini</p>
                                <p class="text-[#b3b3b3]">4 hari lalu</p>
                            </li>
                            <li>
                                <img src="{{asset('assets/img_index/asset/product/starReview.svg')}}" alt="" class="mt-1" />
                            </li>
                            <li>
                                <p class="mt-2">
                                    Sdh sampai dan dalam keadaan beku, packing bagus dan aman.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8 mx-3"></div>
                    <!-- Review 3 -->
                    <div class="w-full">
                        <div class="flex justify-between">
                            <img src="{{asset('assets/img_index/asset/product/pagination_arrow-left.svg')}}" alt="" />
                            <div class="w-[75%] flex justify-between">
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>1</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#ffffff] bg-[#D10B05]">
                                    <span>2</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>3</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>4</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>5</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>6</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>...</span>
                                </div>
                                <div class="px-2 py-[2px] rounded-md cursor-pointer text-[#999999] hover:bg-[#CCCCCC]">
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="{{asset('assets/img_index/asset/product/pagination_arrow-right.svg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil elemen-elemen HTML yang diperlukan
        const lowButton = document.getElementById("low");
        const midButton = document.getElementById("mid");
        const highButton = document.getElementById("high");
        const plusButton = document.getElementById("plus");
        const minusButton = document.getElementById("mines");
        const valueProduct = document.getElementById("value-product");
        const itemWeight = document.getElementById("item-weight");
        const totalValue = document.getElementById("total-value");
        const valueView = document.getElementById("value-view");

        // Mendefinisikan harga awal
        var currentPrice = parseInt("{{$detail_produk['varian'][0]['harga']}}");
        var currentWeight = "{{$detail_produk['varian'][0]['varian1']}}";

        // Menetapkan nilai awal pada elemen-elemen HTML
        valueProduct.innerText = "1";
        itemWeight.innerText = currentWeight;
        totalValue.innerText = currentPrice.toLocaleString("id-ID");
        valueView.innerText = currentPrice.toLocaleString("id-ID");

        // Menangani klik pada tombol berat
        function handleWeightButtonClick(weight, price) {
            return function() {
                currentPrice = price;
                currentWeight = weight;
                itemWeight.innerText = weight;
                totalValue.innerText = currentPrice.toLocaleString("id-ID");
                valueView.innerText = currentPrice.toLocaleString("id-ID");
                valueProduct.innerText = "1";
            };
        }

        lowButton.addEventListener(
            "click",
            handleWeightButtonClick("{{$detail_produk['varian'][0]['varian1']}}", parseInt(
                "{{$detail_produk['varian'][0]['harga']}}"))
        );
        midButton.addEventListener(
            "click",
            handleWeightButtonClick("{{$detail_produk['varian'][1]['varian2']}}", parseInt(
                "{{$detail_produk['varian'][1]['harga']}}"))
        );
        highButton.addEventListener(
            "click",
            handleWeightButtonClick("1kg", 200000)
        );

        // Menangani klik pada tombol plus
        plusButton.addEventListener("click", function() {
            var currentValue = parseInt(valueProduct.textContent); // Mengambil nilai saat ini
            valueProduct.textContent = (currentValue + 1).toString();

            var currentTotalValue = currentPrice * (currentValue + 1);
            totalValue.textContent = currentTotalValue.toLocaleString("id-ID");
        });

        // Menangani klik pada tombol minus
        minusButton.addEventListener("click", function() {
            var currentValue = parseInt(valueProduct.textContent); // Mengambil nilai saat ini
            if (currentValue > 1) {
                valueProduct.textContent = (currentValue - 1).toString();

                var currentTotalValue = currentPrice * (currentValue - 1);
                totalValue.textContent = currentTotalValue.toLocaleString("id-ID");
            }
        });


    });

    function setActive(id) {
        const buttons = document.querySelectorAll(".flex button");
        buttons.forEach((button) => {
            if (button.id === id) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    }

    const lowButton = document.getElementById("low");
    const midButton = document.getElementById("mid");
    const highButton = document.getElementById("high");

    lowButton.addEventListener("click", function() {
        setActive("low");
    });

    midButton.addEventListener("click", function() {
        setActive("mid");
    });

    highButton.addEventListener("click", function() {
        setActive("high");
    });



    function changeProduct(product) {
        const productImage = $('#product-image');
        const imagePath = `{{asset('storage/img_uploaded/${product}')}}`;
        productImage.attr('src', imagePath);
    }

    // Set product1 as default
    changeProduct("{{$detail_produk['foto']['foto1']}}");
</script>
<!-- Product -->
@endsection