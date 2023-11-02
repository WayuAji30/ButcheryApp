@extends('templates.cart-checkout')
@section('content')

@php
if(session()->has('NewDataCart')){
    session()->forget('NewDataCart');
}    
@endphp


<!-- CART -->
<div class="container lg:pt-[201px] md:pt-20 pt-16">
    <div class="grid grid-cols-12">
        <div class="lg:col-span-8 col-span-12">
            <div class="lg:ml-24 ml-5">
                <button class="text-[#D10B05] text-[20px] lg:pb-4 pb-1 lg:px-12 px-5 lg:border-b-4 border-b-2 border-[#D10B05] font-medium cursor-default sm:text-[16px]">
                    Keranjang
                </button>
            </div>
            <div class="lg:ml-24 md:ml-5 sm:mx-2">
                <!--  -->
                @foreach ($cart_items as $ci )
                <div class="w-[100%] md:w-[95%] bg-white border-b-4 border-[#e6e6e6] mt-11 cart-item">
                    <div class="flex items-center">
                        <input type="checkbox" class="harga-item checkbox checkbox-error mr-6" data-harga="{{(isset($ci->harga)) ? $ci->harga * $ci->qty : ''}}" data-qty="{{ (isset($ci->qty)) ? $ci->qty : 1 }}" />
                        <input type="hidden" name="" id = "foto" value = "{{(isset($ci->foto) ? $ci->foto : '')}}">
                        <input type="hidden" name="" id = "id_user" value = "{{(isset($ci->user_id)) ? $ci->user_id : ''}}">
                        <input type="hidden" name="" id = "id_supplier" value = "{{(isset($ci->supplier_id)) ? $ci->supplier_id : ''}}">
                        <input type="hidden" name="" id = "id_produk" value ="{{(isset($ci->produk_id)) ? $ci->produk_id : ''}}">

                        <img src="{{asset('storage/img_uploaded/' . $ci->foto)}}" alt="" class="w-[180px] rounded-md" />
                        <ul class="ml-6">
                            <li>
                                <span id="nama_produk" class="sm:text-sm">{{(isset($ci->nama_produk)) ? $ci->nama_produk : ''}}</span>
                                <br />
                                <span class="text-[#D10B05] font-semibold sm:text-sm"
                                    id="varian">{{(isset($ci->varian)) ? $ci->varian : ''}}</span>
                            </li>
                            <li class="font-semibold mt-4">
                                Rp<span id="harga">{{(isset($ci->harga)) ? $ci->harga : ''}}</span>
                            </li>

                        </ul>
                    </div>

                    <div class="my-10 flex justify-between items-center">
                        <input type="text" name="note" id="note" placeholder="Tambahkan Catatan" class="border-b-2 border-[#e6e6e6] w-[40%] pr-4 ml-12 focus:border-[#D10B05] focus:outline-none sm:text-sm" value="{{$ci->note}}" />
                        <div class="flex items-center lg:gap-4 mr-20">
                            <form action="/deleteCart" method="POST">
                                @csrf
                                <input type="hidden" name="id_user" id="id_user" value="{{$ci->user_id}}">
                                <input type="hidden" name="id_cart_items" id="id_cart_items" value="{{$ci->_id}}">
                                <button id="btn-remove" onclick="return confirm('apakah anda yakin?')">
                                    <svg class="lg:mr-2 sm:ml-2 sm:w-5" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                        <path fill="none" d="M296 64h-80a7.91 7.91 0 0 0-8 8v24h96V72a7.91 7.91 0 0 0-8-8Z" />
                                        <path fill="#b3b3b3" d="M432 96h-96V72a40 40 0 0 0-40-40h-80a40 40 0 0 0-40 40v24H80a16 16 0 0 0 0 32h17l19 304.92c1.42 26.85 22 47.08 48 47.08h184c26.13 0 46.3-19.78 48-47l19-305h17a16 16 0 0 0 0-32ZM192.57 416H192a16 16 0 0 1-16-15.43l-8-224a16 16 0 1 1 32-1.14l8 224A16 16 0 0 1 192.57 416ZM272 400a16 16 0 0 1-32 0V176a16 16 0 0 1 32 0Zm32-304h-96V72a7.91 7.91 0 0 1 8-8h80a7.91 7.91 0 0 1 8 8Zm32 304.57A16 16 0 0 1 320 416h-.58A16 16 0 0 1 304 399.43l8-224a16 16 0 1 1 32 1.14Z" />
                                    </svg>
                                </button>
                            </form>
                            <button class="btn-action sm:w-8 sm:ml-5" id="mines">
                                <img src="{{asset('assets/img_index/asset/cart/mines.svg')}}" alt="" />
                            </button>
                            <span class="font-semibold" id="jumlah-barang" data-harga="{{ (isset($ci->harga)) ? $ci->harga * $ci->qty : 0 }}">{{(isset($ci->qty)) ? $ci->qty : '0'}}</span>
                            <button class="btn-action sm:w-8 sm:ml-2" id="plus">
                                <img src="{{asset('assets/img_index/asset/cart/plus.svg')}}" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--  -->
            </div>
        </div>

        <!-- Right -->
        <div class="lg:col-span-4 col-span-12 sm:fixed md:fixed md:bottom-0 sm:bottom-0 md:w-full sm:w-full">
            <div class="grid justify-items-center">
                <div class="lg:w-[65%] w-full sm:bg-white md:bg-white lg:border-2 sm:border-t-2 border-[#CCC] lg:rounded-3xl">
                    <div class="lg:m-7 md:mb-8 md:mt-3 sm:mb-6 sm:flex md:flex md:justify-around md:items-center sm:justify-around sm:items-center">
                        <p class="text-[18px] font-semibold lg:block hidden">Tinggal Klik Beli</p>
                        <p class="mt-8 text-[#999] font-medium lg:block hidden">Jumlah Produk</p>
                        <p class="mt-1 font-semibold text-[18px] lg:block hidden">
                            <span id="jumlah-produk">0</span> Produk
                        </p>
                        <div class="border-t-2 border-solid border-[#E6E6E6] mt-5 lg:block hidden"></div>
                        <p class="lg:mt-8 sm:mt-2 text-[#999] font-medium lg:block hidden">Total Harga</p>
                        <p class="text-[#D10B05] text-[24px] font-semibold sm:text-[20px] lg:block hidden">
                            Rp<span id="harga-total"></span>
                        </p>
                        <ul class="lg:hidden block">
                            <li>
                                <p class="mt-2 text-[#999]">Total Harga</p>
                            </li>
                            <li>
                                <p class="text-[#D10B05] font-semibold text-[20px]">
                                    Rp<span id="harga-total"></span>
                                </p>
                            </li>
                        </ul>
                        <button id="btn-beli-cart" class="py-2 lg:px-7 md:px-20 px-16 border-2 lg:mt-6 md:mt-5 sm:mt-4 border-[#D10B05] bg-[#D10B05] lg:w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                            Beli
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART -->

<div class="border-t-2 border-solid border-[#E6E6E6] mt-40"></div>

<!-- FOOTER -->
<footer class="sm:text-xs">
    <div class="w-full lg:mt-12 mt-5 mb-12">
        <div class="container px-[53px]">
            <div class="grid grid-cols-12">
                <div class="lg:col-span-2 md:col-span-6 sm:col-span-6">
                    <h1 class="font-semibold">Jelajahi Butchery</h1>
                    <div class="mt-5 text-[#999999]">
                        <ul class="list-none">
                            <li>
                                <a href="" class="hover:text-[#D10B05]">Tentang Butchery</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Blog</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Kebijakan Butchery</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Kebijakan Privasi</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Mitra Centre</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Karir</a>
                            </li>
                        </ul>
                    </div>
                    <p class="font-semibold mt-9">Ikuti Kami</p>
                    <div class="flex gap-2 mt-4">
                        <a href=""><img src="{{asset('assets/img_index/asset/footer/facebook.svg')}}" alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/footer/x.svg')}}" alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/footer/youtube.svg')}}" alt="" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/footer/instagram.svg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 lg:mt-0 md:mt-0 sm:mt-0 lg:ml-0 sm:ml-3">
                    <h1 class="font-semibold">Layanan Pelanggan</h1>
                    <div class="mt-5 text-[#999999]">
                        <ul class="list-none">
                            <li><a href="" class="hover:text-[#D10B05]">Bantuan</a></li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Butchery Care</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Hubungi Kami</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Kritik dan Saran</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Gratis Ongkir</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Pengembalian Barang</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Syarat dan Ketentuan</a>
                            </li>
                            <li class="mt-2">
                                <a href="" class="hover:text-[#D10B05]">Daftar Mitra</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10">
                    <h1 class="font-semibold">Pembayaran</h1>
                    <div class="flex mt-5 gap-2">
                        <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/BCA.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/BNI.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/BRI.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/Mandiri.svg')}}" alt="" />
                        </button>
                    </div>
                    <div class="flex mt-5 gap-2">
                        <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/BSI.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/Permata.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-3 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/CimbNiaga.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-4 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/SeaBank.svg')}}" alt="" />
                        </button>
                    </div>
                    <div class="flex mt-5 gap-2">
                        <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/ovo.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-3 py-2 shadow-lg rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/dana.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-4 py-2 shadow-lg rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/gopay.svg')}}" alt="" />
                        </button>
                        <button class="bg-white px-5 py-2 shadow-lg rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/spay.svg')}}" alt="" />
                        </button>
                    </div>
                    <h1 class="font-semibold mt-10">Pengiriman</h1>
                    <div class="flex mt-5 gap-2">
                        <button class="bg-white px-2 py-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/butchery.svg')}}" alt="" />
                        </button>
                        <!-- <button
                  class="bg-white px-3 py-2 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/gojek.svg" alt="" />
                </button>
                <button
                  class="bg-white px-3 py-3 shadow-md rounded-lg"
                  disabled
                >
                  <img src="asset/footer/grab.svg" alt="" />
                </button> -->
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6 lg:mt-0 md:mt-10 sm:col-span-12 sm:mt-10 md:ml-10">
                    <h1 class="font-semibold">Get Butchery App</h1>
                    <div class="flex mt-5 items-center">
                        <button class="p-2 shadow-md rounded-lg" disabled>
                            <img src="{{asset('assets/img_index/asset/footer/qr.svg')}}" alt="" />
                        </button>
                        <ul class="ml-5 list-none">
                            <li>
                                <a href="" class="ml-5"><img src="{{asset('assets/img_index/asset/footer/googleplay.svg')}}" alt="" /></a>
                            </li>
                            <li class="mt-3">
                                <a href=""><img src="{{asset('assets/img_index/asset/footer/appstore.svg')}}" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-[#B3B3B3] lg:mt-20 md:my-20 my-14">
                        © Butchery 2023. Hak Cipta Dilindungi
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

@vite(['resources/js/app.js', 'resources/js/cart.js'])

</body>

</html>
@endsection