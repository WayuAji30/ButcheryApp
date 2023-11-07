@extends('templates.checkout')
@section('content')

<!-- CART -->
<div class="container lg:pt-[201px] md:pt-20 sm:pt-5">
    <div class="grid grid-cols-12">
        <div class="lg:col-span-8 col-span-12 sm:text-sm sm:px-3">
            <div class="lg:ml-24 md:ml-10">
                <a href="/cart" class="flex items-center gap-3 text-lg font-semibold hidden sm:block"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024">
                        <path fill="#999" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z" />
                        <path fill="#999" d="m237.248 512l265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z" />
                    </svg> Keranjang</a>
                <button class="text-[#D10B05] text-[20px] pb-4 md:pb-2 px-12 md:border-b-2 border-b-4 border-[#D10B05] font-medium cursor-default sm:hidden">
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
                    @foreach ($data_produk as $dp)
                    <input type="hidden" name="" id="subtotal" value="{{$dp->harga_total}}">
                    <div class="list_produk flex items-center mt-3">
                        <input type="hidden" name="" id="id_user" class="" value="{{session('id_user')}}">
                        <input type="hidden" name="" id="id_produk" class="" value="{{$dp->produk_id}}">
                        <input type="hidden" name="" id="id_supplier" class="" value="{{$dp->supplier_id}}">
                        <input type="hidden" name="" id="foto_produk" class="" value="{{$dp->foto}}">
                        <img src="{{asset('storage/img_uploaded/'. $dp->foto)}}" alt="" class="w-[180px] rounded-md" />
                        <ul class="ml-6">
                            <li>
                                <span class="nama_produk" id="nama_produk">{{$dp->nama_produk}}</span><br />
                                <span class="text-[#D10B05] font-semibold" id="varian">{{$dp->varian}}</span>
                            </li>
                            <li class="font-semibold mt-4">Rp<span class="harga_barang" id="harga_barang">{{$dp->harga}}</span><span class="qty font-semibold ml-3 sm:text-sm" id="qty">x{{$dp->qty}}</span></li>
                        </ul>
                    </div>
                    @endforeach
                    <div class="mt-10"></div>
                </div>
                <!-- Alamat -->
                <div class="w-[100%] mt-8">
                    <div class="flex items-center justify-between lg:mr-8">
                        <div class="flex items-center sm:justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="black" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                            </svg>
                            <p class="font-semibold text-[18px]">Alamat Pengiriman</p>
                        </div>
                        <!-- <button class="text-[#D10B05] font-semibold hover:text-[#9F0804]">Ubah</button> -->
                        <!-- The button to open modal -->
                        <label for="my_modal_7" id="ubah_alamat" class="text-[#D10B05] font-semibold hover:text-[#9F0804]" data-alamat1="{{(isset($data_user['alamat'][0]['alamat']) ? $data_user['alamat'][0]['alamat'] : 'Tidak ada alamat tambahan')}}" data-alamat2="{{(isset($data_user['alamat'][1]['alamat']) ? $data_user['alamat'][1]['alamat'] : 'Tidak ada alamat tambahan')}}" data-alamat3="{{(isset($data_user['alamat'][2]['alamat']) ? $data_user['alamat'][2]['alamat'] : 'Tidak ada alamat tambahan')}}">Ubah</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box">
                                <p class="font-semibold text-[20px] text-center">Alamat Pengiriman</p>
                                <div class="alamat flex items-center gap-5 mt-2">
                                    <input type="radio" id="alamat1" value="">
                                    <label for="alamat1">
                                        <p id="alamat-user-modal">
                                            {{$data_user['alamat'][0]['alamat']}}
                                        </p>
                                        <p class="font-semibold mt-1" id="phone-user-modal">
                                            {{(isset($data_user['no_hp']) ? $data_user['no_hp'] : '(+62) Tidak Tersedia')}}
                                        </p>
                                    </label>
                                </div>
                                <div class="collapse bg-base-200 collapse-arrow mt-10">
                                    <input type="checkbox" />
                                    <div class="collapse-title font-semibold">
                                        Tambah Alamat Pengiriman
                                    </div>
                                    <div class="collapse-content">
                                        <form action="/updateUserByCheckout" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$data_user->_id}}">
                                            <p class="text-[#787878] text-start sm:text-xs">
                                                Provinsi
                                            </p>
                                            <select name="provinsi" id="provinsi" class="lg:pl-5 sm:pl-2 lg:py-3 sm:py-2 sm:text-xs border-solid border-2 mt-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                                                <option value="">Pilih Provinsi</option>
                                            </select>
                                            <br>
                                            <div class="lg:flex lg:mt-4 sm:mt-2 justify-center gap-6 mb-5">
                                                <div class="flex-col text-start sm:text-xs">
                                                    <label for="kota" class="text-[#787878]">Kota</label> <br>
                                                    <select name="kota" id="kota" class="lg:pl-5 sm:pl-2 lg:py-3 sm:py-2 lg:mt-3 sm:mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] sm:w-[90%] focus:outline-[#D10B05]">
                                                        <option value="">Pilih Kota</option>
                                                    </select>
                                                </div>
                                                <div class="flex-col text-start sm:text-xs sm:mt-3">
                                                    <label for="kecamatan" class="text-[#787878]">Kecamatan</label>
                                                    <br>
                                                    <select name="kecamatan" id="kecamatan" class="lg:pl-5 sm:pl-2 lg:py-3 sm:py-2 lg:mt-3 sm:mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] sm:w-[90%] focus:outline-[#D10B05]">
                                                        <option value="">Pilih Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <p class="text-[#787878] text-start sm:text-xs">Alamat
                                                Detail</p>
                                            <textarea class="peer block min-h-[auto] sm:text-xs mx-auto my-auto w-full mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear" id="alamat" name="alamat" rows="4"></textarea>

                                            <div class="flex justify-end">
                                                <button type="submit" class="text-white sm:text-xs bg-[#D10B05] lg:py-2 sm:py-1 lg:px-10 md:px-36 sm:px-20 rounded-lg font-semibold  hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                                                    Tambah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <label class="modal-backdrop" for="my_modal_7">Close</label>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ms-2">
                    <p id="alamat-user">{{$data_user['alamat'][0]['alamat']}}</p>
                    <p class="font-semibold mt-4" id="phone-user">
                        {{($data_user['no_hp'] === '') ?  '(+62) Tidak Tersedia' : $data_user['no_hp']}}
                    </p>
                </div>
                <div class="mt-10 border-b-4 border-[#e6e6e6]"></div>
                <!-- Pengiriman -->
                <div class="w-[100%] bg-white mt-8">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="black" d="M3 13.5L2.25 12H7.5l-.6-1.5H2L1.25 9h7.8l-.6-1.5H1.11L.25 6H4a2 2 0 0 1 2-2h12v4h3l3 4v5h-2a3 3 0 0 1-3 3a3 3 0 0 1-3-3h-4a3 3 0 0 1-3 3a3 3 0 0 1-3-3H4v-3.5H3m16 5a1.5 1.5 0 0 0 1.5-1.5a1.5 1.5 0 0 0-1.5-1.5a1.5 1.5 0 0 0-1.5 1.5a1.5 1.5 0 0 0 1.5 1.5m1.5-9H18V12h4.46L20.5 9.5M9 18.5a1.5 1.5 0 0 0 1.5-1.5A1.5 1.5 0 0 0 9 15.5A1.5 1.5 0 0 0 7.5 17A1.5 1.5 0 0 0 9 18.5Z" />
                        </svg>
                        <p class="font-semibold text-[18px]">Opsi Pengiriman</p>
                    </div>
                    <div class="mt-3">
                        <button id="motor" class="pl-5 py-2 border-l-4 border-[#D10B05]">
                            <div class="flex items-center sm:justify-between font-semibold gap-12">
                                <p id="motor_j" class="text-[20px] sm:text-[18px]">Motor</p>
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
                        <button id="mobil" class="pl-5 py-2 border-l-4 border-[#ccc] mt-4">
                            <div class="flex items-center sm:justify-between font-semibold gap-12">
                                <p id="mobil_j" class="text-[20px] sm:text-[18px] text-[#999]">Mobil Box</p>
                                <p class="text-[18px] sm:text-[18px] text-[#D10B05]">
                                    Rp<span>18.900</span>
                                </p>
                            </div>
                            <p class="text-start mt-2 text-[#999]">
                                Pengiriman menggunakan kendaraan mobil box. Digunakan untuk
                                <br class="lg:block sm:hidden" />
                                pengiriman antar kota dan pembelian dalam jumlah tertentu.
                            </p>
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
                    <div class="lg:m-7 md:mb-10 sm:mx-4 sm:mb-4">
                        <p class="text-[18px] font-semibold lg:block hidden">Rincian Belanjaan</p>
                        <div class="flex items-center mt-5 justify-between md:hidden sm:hidden">
                            <p class="" id="j-subtotal"></p>
                            <p>Rp<span id="rincian_subtotal"></span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between md:hidden sm:hidden">
                            <p class="">Total Ongkos Kirim (Promo)</p>
                            <p>Rp<span id="ongkir">10.000</span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between md:hidden sm:hidden">
                            <p class="">Biaya Layanan Aplikasi</p>
                            <p>Rp<span id="layanan">1.000</span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between md:hidden sm:hidden">
                            <p class="">Biaya Asuransi</p>
                            <p>Rp<span id="asuransi">1.000</span></p>
                        </div>
                        <div class="flex items-center mt-2 justify-between md:hidden sm:hidden">
                            <p class="">Biaya Tambahan</p>
                            <p>Rp<span id="tambahan">1.000</span></p>
                        </div>
                        <div class="border-t-2 border-solid border-[#E6E6E6] lg:mt-5 mt-0 sm:hidden"></div>
                        <div class="collapse collapse-arrow lg:hidden">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <p class="text-[14px] font-semibold">Rincian Belanjaan</p>
                            </div>
                            <div class="collapse-content sm:text-sm">
                                <div class="flex items-center justify-between ">
                                    <p class="">Total Harga (0 Produk)</p>
                                    <p>Rp<span id="harga-barang"></span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between ">
                                    <p class="">Total Ongkos Kirim (Promo)</p>
                                    <p>Rp<span id="ongkir">10.000</span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between ">
                                    <p class="">Biaya Layanan Aplikasi</p>
                                    <p>Rp<span id="layanan">1.000</span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between ">
                                    <p class="">Biaya Asuransi</p>
                                    <p>Rp<span id="asuransi">1.000</span></p>
                                </div>
                                <div class="flex items-center mt-2 justify-between ">
                                    <p class="">Biaya Tambahan</p>
                                    <p>Rp<span id="tambahan">1.000</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between lg:mt-8 md:mt-3 sm:mt-0 sm:text-[14px]">
                            <p class="text-[#999] font-medium">Total Belanja</p>
                            <p class="lg:text-[24px] text-[18px] font-semibold">
                                Rp<span id="harga-total"></span>
                            </p>
                        </div>
                        <button id="buat-pesanan" class="lg:mt-6 mt-3 py-2 lg:px-7 md:px-4 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out">
                            Buat Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CART -->
<div class="lg:mt-20 sm:mt-5"></div>

@vite(['resources/js/app.js','resources/jquery/code.jquery.com_jquery-3.7.1.min.js','resources/js/checkout.js',
'resources/js/selectIndonesia.js', 'resources/js/tambahAlamat.js'])
@endsection