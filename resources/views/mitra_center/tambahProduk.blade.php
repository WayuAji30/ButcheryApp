@extends('../templates/mitra-layout')
@section('content')

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
                <a href="/tambahProduk" class="text-[#D10B05] border-l-4 py-2 border-[#D10B05] pl-[58px] ">Tambah
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="/daftarProduk"
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Daftar
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="" class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px]">Pelanggaran
                    Produk</a>
            </p>
        </div>
        <a href="" class="flex items-center active-nav-link cta-btn py-4 pl-6 nav-item">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="#2b2b2b"
                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z" />
            </svg>
            <p class="font-semibold text-[18px]">Pesanan</p>
        </a>

        <a href="" class="flex items-center active-nav-link cta-btn pb-4 pl-6 nav-item">
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
    <div class="mt-32 bg-white rounded-tl-2xl w-full ml-4 shadow-md">
        <p class="mt-7">
            <a class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium cursor-default">Informasi
                Produk</a>
        </p>
        <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
        <form action="{{(isset($produk->_id) ? '/edit_produk' : '/store_produk')}}" method="POST"
            enctype="multipart/form-data">
            @csrf

            @if (isset($produk->_id))
            <input type="hidden" name="id" value="{{$produk->_id}}" />
            <input type="hidden" name="old_foto1" value="{{$produk['foto']['foto1']}}" />
            <input type="hidden" name="old_foto2" value="{{$produk['foto']['foto2']}}" />
            <input type="hidden" name="old_foto3" value="{{$produk['foto']['foto3']}}" />
            @else
            <input type="hidden" name="user_id" value="{{session('id_user')}}" />
            @endif

            <div class="flex ml-11 mt-10 gap-10 items-center">
                <div>
                    <p class="font-semibold text-[18px]">Foto Produk</p>
                    <p class="mt-4">
                        Format gambar jpg, jpeg, dan <br />
                        png. Pilih foto produk atau <br />tarik dan upload max. 3 foto
                        <br />
                        yang menarik dan berbeda <br />
                        satu sama lain untuk menarik <br />
                        perhatian pembeli.
                    </p>
                </div>
                <input type="file" name="foto1" id="foto1" accept=".jpg,.jpeg,.png,.gif,.svg" />
                <input type="file" name="foto2" id="foto2" accept=".jpg,.jpeg,.png,.gif,.svg" />
                <input type="file" name="foto3" id="foto3" accept=".jpg,.jpeg,.png,.gif,.svg" />
            </div>
            <div class="flex ml-11 mt-16 items-center">
                <p class="font-semibold text-[18px] mr-64">Nama Produk</p>
                <input name="nama_produk" type="text" placeholder="Ketikan Disini"
                    value="{{(isset($produk->nama_produk)) ? $produk->nama_produk : ''}}"
                    class="px-3 py-4 border-solid border-2 border-[#CCCCCC] text-[#999] rounded-md w-[547px] focus:outline-[#D10B05]" />
            </div>
            <div class="flex ml-11 mt-10 items-center">
                <p class="font-semibold text-[18px] mr-[300px]">Kategori</p>

                <select name="kategori" id="Kategori"
                    class="px-3 py-4 border-solid border-2 border-[#CCCCCC] text-[#999] rounded-md w-[547px] focus:outline-[#D10B05]">
                    <option value="{{(isset($produk->id_kategori)) ? $produk->id_kategori : '' }}">
                        {{(isset($produk->id_kategori)) ? $produk->id_kategori : 'Pilih kategori produkmu'}}
                    </option>
                    @foreach ($kategori as $k)
                    <option value="{{$k['nama_kategori']['slug']}}"> {{$k['nama_kategori']['nama']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex ml-11 mt-10 items-center">
                <div>
                    <p class="font-semibold text-[18px] mr-[230px]">
                        Deskripsi Produk
                    </p>
                    <p class="mt-4">
                        Pastikan deskripsi produk <br />
                        memuat penjelasan detail <br />
                        terkait produkmu agar pembeli <br />
                        mudah mengerti dan <br />
                        menemukan produkmu.
                    </p>
                </div>
                <textarea
                    class="peer block min-h-[auto] w-[547px] h-64 mt-3 rounded-md border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear peer-focus:text-primary focus:border-[#D10B05]"
                    id="alamat" rows="4" placeholder="Ketikan deskripsi produkmu" name="deskripsi"
                    value="">{{(isset($produk->deskripsi)) ? $produk->deskripsi : '' }}</textarea>
                <!-- <input name="deskripsi" type="text" placeholder="Ketikan deskripsi produkmu disini"
                    value=""
                    class="px-3 py-4 border-solid border-2 border-[#CCCCCC] text-[#999] rounded-md w-[547px] h-64 focus:outline-[#D10B05]" /> -->
            </div>
            <p class="mt-2 ml-[32%]">
                <span class="text-[#D10B05]">*</span> Tulis deskripsi produkmu max.
                1200 karakter.
            </p>

            <div class="grid grid-rows-1 grid-flow-col ml-11 mt-14">
                <div class="row-span-3">
                    <div>
                        <p class="font-semibold text-[18px]">Harga & Berat Produk</p>
                        <p class="mt-4">
                            Masukan varian berat produk <br />
                            daging yang kamu jual, serta <br />
                            masukan juga jumlah stok <br />
                            yang tersedia untuk masing <br />
                            masing varian berat. Klik <br />
                            tambah untuk menambah <br />jumlah varian.
                        </p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-[#eeeeee] w-[547px] rounded-md">
                        <div class="px-10 py-5">
                            <label for="" class="font-semibold mr-4">Varian 1</label>
                            <input name="varian[varian1]" type="text" placeholder="Contoh: 250gr"
                                value="{{( isset($produk['varian'][0]['varian1']) ) ? $produk['varian'][0]['varian1'] : '' }}"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-[29px]">Harga</label>
                            <input name="varian[harga1]" type="text" placeholder="Masukan dalam Rupiah"
                                value="{{(isset($produk['varian'][0]['harga'])) ? $produk['varian'][0]['harga']: '' }}"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-10">Stok</label>
                            <input name="varian[stok1]" type="text" placeholder="Contoh: 17"
                                value="{{(isset($produk['varian'][0]['stok'])) ? $produk['varian'][0]['stok']: '' }}"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                        </div>
                    </div>
                </div>
                <div class="col-span-2 mt-5" id="varian-plus">
                    <div class="bg-[#eeeeee] w-[547px] rounded-md">
                        <div class="px-10 py-5 pembungkus-page" style="display: flex; align-items: center">
                            <label for="" class="font-semibold mr-4">Varian 2</label>
                            <button id="btn-tambah-produk" form="none"
                                class="btn-tambah-produk flex items-center py-2 px-6 border-dashed border-2 border-[#D10B05] text-[#D10B05] font-semibold gap-3 rounded-md">
                                <span><img src="{{asset('assets/img_mitra_center/asset/tambahProduk/buttonPlus.svg')}}"
                                        alt="" /></span>
                                Tambah Varian
                            </button>
                            <input hidden name="varian[varian2]" type="text" placeholder="Contoh: 250gr"
                                value="{{( isset($produk['varian'][1]['varian2']) ) ? $produk['varian'][1]['varian2'] : '' }}"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-[29px]" hidden>Harga</label>
                            <input hidden name="varian[harga2]" type="text" placeholder="Masukan dalam Rupiah"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-10" hidden>Stok</label>
                            <input hidden type="text" name="varian[stok2]" placeholder="Contoh: 17"
                                value="{{( isset($produk['varian'][1]['stok']) ) ? $produk['varian'][1]['stok'] : '' }}"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                        </div>
                    </div>
                </div>
                <div class="col-span-2 mt-5" id="varian-plus-3">
                    <div class="bg-[#eeeeee] w-[547px] rounded-md">
                        <div class="px-10 py-5" style="display: flex; align-items: center">
                            <label for="" class="font-semibold mr-4">Varian 3</label>
                            <button form="none"
                                class="btn-tambah-produk flex items-center py-2 px-6 border-dashed border-2 border-[#D10B05] text-[#D10B05] font-semibold gap-3 rounded-md">
                                <span><img src="{{asset('assets/img_mitra_center/asset/tambahProduk/buttonPlus.svg')}}"
                                        alt="" /></span>
                                Tambah Varian
                            </button>
                            <input hidden type="text" placeholder="Contoh: 250gr"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-[29px]" hidden>Harga</label>
                            <input hidden type="text" placeholder="Masukan dalam Rupiah"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                            <label for="" class="mr-10" hidden>Stok</label>
                            <input hidden type="text" placeholder="Contoh: 17"
                                class="px-3 py-2 border-solid border-2 border-[#e6e6e6] mt-4 text-[#999] rounded-md w-[80%] focus:outline-[#D10B05]" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-20">
                <div class="flex items-center gap-3 justify-end mr-[26%]">
                    <button id="cancelButton"
                        class="border-2 border-[#D10B05] text-[#D10b05] py-2 px-14 rounded-md font-semibold hover:bg-[#D10B05] hover:text-white transition-all duration-200 ease-linear">
                        Kembali
                    </button>
                    <button name="submit"
                        class="border-2 border-[#D10B05] text-white bg-[#D10b05] py-2 px-14 rounded-md font-semibold hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-linear">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection