@extends('templates.search-product')
@section('content')

<!-- Product -->
<div class="lg:pt-[201px] pt-24 px-12 sm:px-7 w-full">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <!-- Left -->
            <div class="lg:col-span-4 col-span-12">
                <div class="grid justify-items-center">
                    <img id="product-image" src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto1'])}}" alt="" class="w-[345px] rounded-md" />
                </div>
                <div class="toko flex gap-3 mt-4 lg:pl-16 lg:justify-normal md:justify-center">
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto1']}}')">
                        <img src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto1'])}}" alt="" class="w-[61px] rounded-md" id="foto1" />
                    </button>
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto2']}}')">
                        <img src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto2'])}}" alt="" class="w-[61px] rounded-md" />
                    </button>
                    <button class="border-4 border-white rounded-lg focus:border-[#d10b05] transition-all duration-500 ease-in-out" onclick="changeProduct('{{$detail_produk['foto']['foto3']}}')">
                        <img src="{{asset('storage/img_uploaded/'.$detail_produk['foto']['foto3'])}}" alt="" class="w-[61px] rounded-md" />
                    </button>
                </div>
                <div class="border-t-2 border-solid border-[#E6E6E6] lg:mt-11 lg:mx-16 mt-5 "></div>

                <!-- TOKO -->
                <div class="lg:block hidden">
                    <div class="toko flex pl-16 mt-10 items-center">
                        <img src="{{asset('assets/img_index/asset/product/profile.svg')}}" alt="" class="" />
                        <div class="ml-4">
                            <h1 class="font-semibold">
                                {{(strlen($detail_produk['nama_toko']) > 16 ? substr($detail_produk['nama_toko'],0,15).'...' : $detail_produk['nama_toko'])}}
                            </h1>
                            <p class="text-[#999999]">{{$detail_produk['alamat_toko']['alamat']}}</p>
                        </div>
                    </div>
                    <div class="toko flex pl-16 mt-6 gap-4">
                        <a href="https://api.whatsapp.com/send/?phone={{$data_supplier->no_wa}}&text&type=phone_number&app_absent=0" class="flex text-[#D10B05] bg-[#D10B05] bg-opacity-10 py-2 px-6 border-2 border-[#D10B05] items-center">
                            <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#d10b05" d="M2 22V4q0-.825.588-1.413T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H6l-4 4Zm4-8h8v-2H6v2Zm0-3h12V9H6v2Zm0-3h12V6H6v2Z" />
                            </svg>
                            Chat Seller
                        </a>
                        <form action="/toko">
                            <button class="flex text-[#B3B3B3] py-2 px-6 border-2 border-[#B3B3B3] items-center">
                                <svg class="pr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#b3b3b3" d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                                </svg>
                                Lihat Toko
                            </button>
                        </form>
                    </div>
                </div>
                <div class="toko pl-16 mt-12 lg:block hidden">
                    <p>Produk lainnya dari toko ini</p>
                    @foreach ($product_related as $pr)
                    <button class="flex shadow-lg w-[328px] h-24 text-[12px] font-medium text-start mt-5">
                        <img src="{{asset('storage/img_uploaded/'.$pr['foto']['foto1'])}}" alt="" class="w-[115px] h-[96px] h-24" />
                        <div class="flex-none pl-4 mt-3">
                            <p class="w-[200px]">{{$pr->nama_produk}}</p>
                            <p class="font-semibold text-[#D10B05] text-[16px] mt-2">
                                Rp<span>{{$pr['varian'][0]['harga1']}}</span>
                            </p>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Center -->
            <div class="lg:col-span-4 md:col-span-6 col-span-12 lg:mt-0 mt-5">
                <input type="hidden" name="foto_produk" id="foto_produk" value="{{$detail_produk['foto']['foto1']}}">
                <h1 class="font-medium text-[24px] sm:text-[20px]" id="nama_produk">{{$detail_produk->nama_produk}}</h1>
                <div class="flex">
                    <p>{{$rating}}</p>
                    <button><img src="asset/product/star.svg" alt="" /></button>
                    <p class="text-[#B3B3B3] ml-3 sm:ml-0">(<span>{{$jumlah_reviews}}</span> Penilaian) |</p>
                    <p class="ml-2"><span>{{$terjual}}</span> Terjual</p>
                </div>
                <p class="font-semibold text-[36px] mt-6 sm:mt-2 sm:text-[30px]">
                    Rp <span id="value-view"></span>
                </p>
                <section class="mt-9 sm:mt-5">
                    <p class="font-semibold text-[18px]">Pilih varian:</p>
                    <div class="flex gap-3 mt-4">
                        <button id="low" data-varian="{{$detail_produk['varian'][0]['varian1']}}" data-price="{{$detail_produk['varian'][0]['harga1']}}" data-stok="{{$detail_produk['varian'][0]['stok1']}}" class="py-2 px-4 rounded-lg border-2 border-gray-300 active transition-all duration-500 ease-in-out">
                            {{$detail_produk['varian'][0]['varian1']}}
                        </button>
                        <button id="mid" data-varian="{{$detail_produk['varian'][1]['varian2']}}" data-price="{{$detail_produk['varian'][1]['harga2']}}" data-stok="{{$detail_produk['varian'][1]['stok2']}}" class="py-2 px-4 rounded-lg border-2 border-gray-300 transition-all duration-500 ease-in-out">
                            {{$detail_produk['varian'][1]['varian2']}}
                        </button>
                        <button id="high" data-varian="{{$detail_produk['varian'][2]['varian3']}}" data-price="{{$detail_produk['varian'][2]['harga3']}}" data-stok="{{$detail_produk['varian'][2]['stok3']}}" class="py-2 px-4 rounded-lg border-2 border-gray-300 transition-all duration-500 ease-in-out">
                            {{$detail_produk['varian'][2]['varian3']}}
                        </button>
                    </div>
                </section>
                <div class="border-t-2 border-solid border-[#E6E6E6] mt-11 sm:mt-5"></div>
                <div class="lg:hidden md:block">
                    <div class="flex mt-5 items-center">
                        <img src="{{asset('assets/img_index/asset/product/profile.svg')}}" alt="" class="sm:w-14" />
                        <div class="ml-4">
                            <h1 class="font-semibold">
                                {{(strlen($detail_produk['nama_toko']) > 16 ? substr($detail_produk['nama_toko'],0,15).'...' : $detail_produk['nama_toko'])}}
                            </h1>
                            <p class="text-[#999999] sm:text-sm">{{$detail_produk['alamat_toko']['alamat']}}</p>
                        </div>
                    </div>
                    <div class="flex mt-6 gap-4">
                        <a href="https://api.whatsapp.com/send/?phone={{$data_supplier->no_wa}}&text&type=phone_number&app_absent=0" class="flex text-[#D10B05] bg-[#D10B05] bg-opacity-10 py-2 sm:py-1 sm:px-4 px-6 border-2 border-[#D10B05] items-center sm:text-sm">
                            <svg class="pr-2 sm:pr-1 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#d10b05" d="M2 22V4q0-.825.588-1.413T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H6l-4 4Zm4-8h8v-2H6v2Zm0-3h12V9H6v2Zm0-3h12V6H6v2Z" />
                            </svg>
                            Chat Seller
                        </a>
                        <button class="flex text-[#B3B3B3] py-2 sm:py-1 sm:px-4 px-6 border-2 border-[#B3B3B3] items-center sm:text-sm">
                            <svg class="pr-2 sm:pr-1 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#b3b3b3" d="M21.999 8a.997.997 0 0 0-.143-.515L19.147 2.97A2.01 2.01 0 0 0 17.433 2H6.565c-.698 0-1.355.372-1.714.971L2.142 7.485A.997.997 0 0 0 1.999 8c0 1.005.386 1.914 1 2.618V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.382c.614-.704 1-1.613 1-2.618zm-2.016.251A2.002 2.002 0 0 1 17.999 10c-1.103 0-2-.897-2-2c0-.068-.025-.128-.039-.192l.02-.004L15.219 4h2.214l2.55 4.251zm-9.977-.186L10.818 4h2.361l.813 4.065C13.957 9.138 13.079 10 11.999 10s-1.958-.862-1.993-1.935zM6.565 4h2.214l-.76 3.804l.02.004c-.015.064-.04.124-.04.192c0 1.103-.897 2-2 2a2.002 2.002 0 0 1-1.984-1.749L6.565 4zm3.434 12h-4v-3h4v3z" />
                            </svg>
                            Lihat Toko
                        </button>
                    </div>
                </div>
                <div class="flex gap-14 mt-9 sm:mt-5">
                    <p class="font-semibold pb-3 text-[#d10b05] border-b-2 border-[#d10b05]">
                        Deskripsi Produk
                    </p>
                </div>
                <p class="mt-8 sm:mt-5">
                    {{$detail_produk->deskripsi}}
                </p>

                <div class="border-t-2 border-solid border-[#E6E6E6] mt-11 sm:mt-5"></div>
                <div class="mt-8 sm:mt-5">
                    <button class="text-[#D10B05] font-medium border-b-2 border-[#D10B05] py-2 cursor-default">
                        Pengiriman
                    </button>
                    <div class="mt-5">
                        <p class="flex">
                            <img class="pr-3" src="{{asset('assets/img_index/asset/product/ion_location-sharp.svg')}}" alt="" />Dikirim dari
                            <span class="font-semibold pl-1" id="asal">{{$detail_produk['alamat_toko']['alamat']}}</span>
                        </p>
                        <p class="flex mt-4">
                            <img class="pr-3" src="{{asset('assets/img_index/asset/product/mdi_courier-fast.svg')}}" alt="" />Pengiriman ke

                            <select name="kota/kab" id="kota" class="font-medium lg:w-52 md:w-48 w-40">
                                <option value="">Pilih Lokasi Pengiriman</option>
                                @foreach($kota['kota_indonesia'] as $kota_kab)
                                <option value="{{ $kota_kab }}">{{ $kota_kab }}</option>
                                @endforeach
                            </select>
                        </p>
                        <p class="ml-8" id="ongkir"></p>
                        <p class="mt-5 sm:mt-2">
                            Butchery dapat melakukan pengiriman antar kota <br class="hidden lg:block" />
                            dengan mobil box berpendingin untuk menjaga <br class="hidden lg:block" />
                            kualitas daging tetap sempurna saat sampai ke <br class="hidden lg:block" />
                            tangan customer.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div class="lg:col-span-4 md:col-span-6 sm:col-span-12 ml-8 sm:ml-0 lg:mt-0 md:mt-5">
                <div class="grid grid-cols-1 justify-items-center">
                    <div class="card-product lg:w-[80%] w-[100%] h-[100%] sm:h-[10%] sm:rounded-none border-2 border-[#CCC] rounded-3xl sm:fixed sm:bottom-0 sm:bg-white">
                        <div class="m-7 sm:m-5">
                            <p class="text-[18px] font-semibold sm:hidden">Siapkan Pesanan</p>
                            <form action="/checkOut">
                                <div class="flex items-center mt-6 justify-between sm:hidden">
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
                                        <span class="font-semibold" id="value-stok">{{$detail_produk['varian'][0]['stok1']}}</span>
                                    </p>
                                </div>
                                <p class="mt-7 sm:hidden">
                                    Pilihan Varian:
                                    <span class="font-semibold" id="item-weight"></span>
                                </p>
                                <div class="border-t-2 border-solid border-[#E6E6E6] mt-2 sm:hidden"></div>
                                <div class="mt-5 sm:hidden">
                                    <textarea class="peer block min-h-[auto] mx-auto w-full mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" id="catatan" rows="4" placeholder="Tambahkan Catatan"></textarea>
                                </div>
                                <div class="flex justify-between mx-1 mt-6 sm:hidden">
                                    <p class="text-[#999] font-medium">Subtotal</p>
                                    <p class="font-semibold text-[20px]">
                                        Rp <span id="total-value"></span>
                                    </p>
                                </div>
                                @if($detail_produk->supplier_id == session('id_supplier'))
                                <div class="flex items-center justify-between mt-6 sm:mt-2">
                                    <a href="javascript:void(0);" id="btn-beli" data-id_user="{{session('id_user')}}" disabled data-id_produk="{{(isset($detail_produk->_id)) ? $detail_produk->_id : ''}}" data-id_supplier="{{(isset($detail_produk->supplier_id)) ? $detail_produk->supplier_id : ''}}" class="cursor-not-allowed text-[#CCC] py-2 px-8 sm:px-14 border-2 border-[#CCC] rounded-md font-medium transition-all duration-200 ease-linear">
                                        Beli
                                    </a>
                                    <a href="javascript:void(0);" id="addToCart" data-id_user="{{session('id_user')}}" data-id_produk="{{(isset($detail_produk->_id)) ? $detail_produk->_id : ''}}" data-id_supplier="{{(isset($detail_produk->supplier_id)) ? $detail_produk->supplier_id : ''}}" class="cursor-not-allowed py-2 lg:px-5 md:px-4 sm:px-8 border-2 border-[#CCC] bg-[#CCC] text-white rounded-md font-medium transition-all duration-200 ease-linear">
                                        + Keranjang
                                    </a>
                                </div>
                                @else
                                <div class="flex items-center justify-between mt-6 sm:mt-2">
                                    <a href="javascript:void(0);" id="btn-beli" data-id_user="{{session('id_user')}}" data-id_produk="{{(isset($detail_produk->_id)) ? $detail_produk->_id : ''}}" data-id_supplier="{{(isset($detail_produk->supplier_id)) ? $detail_produk->supplier_id : ''}}" class="text-[#D10B05] py-2 px-8 sm:px-14 border-2 border-[#D10B05] rounded-md font-medium hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">
                                        Beli
                                    </a>
                                    <a href="javascript:void(0);" id="addToCart" data-id_user="{{session('id_user')}}" data-id_produk="{{(isset($detail_produk->_id)) ? $detail_produk->_id : ''}}" data-id_supplier="{{(isset($detail_produk->supplier_id)) ? $detail_produk->supplier_id : ''}}" class="py-2 lg:px-5 md:px-4 sm:px-8 border-2 border-[#D10B05] bg-[#D10B05] text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">
                                        + Keranjang
                                    </a>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lg:ml-14 md:ml-4 mt-14 sm:mt-5">
                    <p class="text-[#D10B05] font-semibold">Ulasan Pembeli</p>
                    <div class="flex items-center gap-2 mt-3">
                        <img src="{{asset('assets/img_index/asset/product/ic_round-star.svg')}}" alt="" />
                        <p class="text-[60px] font-medium" id="value-rating">{{$rating}}</p>
                        <p class="text-[#CCC] mt-9">
                            <span>{{$terjual}}</span> Terjual | <span>{{$jumlah_reviews}}</span> Penilaian
                        </p>
                    </div>
                </div>
                @foreach ($reviews as $r)
                @php
                $ds = [];
                foreach ($data_user as $data) {
                if ($data[0]['_id'] === $r->id_user) {
                $ds[] = $data;
                }
                }
                @endphp
                <div class="ml-14 mt-9 sm:ml-2">
                    <!-- Review 1 -->
                    <div class="flex items-start gap-5">
                        <img src="{{ asset('assets/img_mitra_center/asset/navbar/profile.svg') }}" alt="" />
                        <ul>
                            <li class="flex">
                                <p class="font-semibold mr-3">{{ $ds[0][0]['username'] }}</p>
                                <p class="text-[#b3b3b3]">4 hari lalu</p>
                            </li>
                            <li>
                                <div class="rating rating-sm mt-1">
                                    @for ($i = 1; $i
                                    <= 5; $i++) <input type="radio" name="rating-{{$r->_id}}" class="mask mask-star-2 bg-orange-400" {{ $r->ratings == $i ? 'checked' : '' }} />
                                    @endfor
                                </div>
                            </li>
                            <li>
                                <p class="mt-2">
                                    {{ $r['reviews'] }}
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="border-t-2 border-solid border-[#E6E6E6] mt-8 mx-3"></div>
                    <!-- Review 1 -->
                    <div class="mt-8 mx-3"></div>
                    <!-- pagination -->
                </div>
                @endforeach
                <div class="w-full">
                    <div class="flex justify-center items-center">
                        @if ($reviews->currentPage() > 1)
                        <a href="{{ $reviews->previousPageUrl() }}" class="rounded-md cursor-pointer hover:bg-[#CCCCCC] py-1 pl-1">
                            <img src="{{asset('assets/img_index/asset/product/pagination_arrow-left.svg')}}" alt="" />
                        </a>
                        @endif

                        <div class="w-[80%] flex justify-center gap-3 items-center">
                            @for ($i = 1; $i <= $reviews->lastPage(); $i++)
                                <div class="rounded-md cursor-pointer
                                    @if ($reviews->currentPage() == $i)
                                        text-white bg-[#D10B05]
                                    @else
                                        text-white bg-[#CCCCCC] hover:bg-[#D10B05]
                                    @endif
                                    px-2 py-[2px]">
                                    <a href="{{ $reviews->url($i) }}">
                                        <span>{{ $i }}</span>
                                    </a>
                                </div>
                                @endfor
                        </div>

                        @if ($reviews->hasMorePages())
                        <a href="{{ $reviews->nextPageUrl() }}" class="rounded-md cursor-pointer hover:bg-[#CCCCCC] py-1 pr-1">
                            <img src="{{asset('assets/img_index/asset/product/pagination_arrow-right.svg')}}" alt="" />
                        </a>
                        @endif
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
        var currentPrice = parseInt("{{$detail_produk['varian'][0]['harga1']}}");
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
                "{{$detail_produk['varian'][0]['harga1']}}"))
        );
        midButton.addEventListener(
            "click",
            handleWeightButtonClick("{{$detail_produk['varian'][1]['varian2']}}", parseInt(
                "{{$detail_produk['varian'][1]['harga2']}}"))
        );
        highButton.addEventListener(
            "click",
            handleWeightButtonClick("{{$detail_produk['varian'][2]['varian3']}}", parseInt(
                "{{$detail_produk['varian'][2]['harga3']}}"))
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