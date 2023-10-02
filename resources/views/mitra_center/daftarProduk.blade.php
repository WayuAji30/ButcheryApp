@extends('../templates/mitra-layout')
@section('content')

<!-- Navbar kiri -->
<aside class="relative pt-20 h-screen w-64 hidden sm:block shadow-xl bg-white">
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
            </h1>
        </a>
        <div class="font-medium hidden" id="menu-produk">
            <p class="mt-4">
                <a href="/tambahProduk"
                    class="text-[#999] hover:text-[#D10B05] border-l-4 py-2 border-white pl-[58px] ">Tambah
                    Produk</a>
            </p>
            <p class="mt-4">
                <a href="/daftarProduk" class="text-[#D10B05] border-l-4 py-2 border-[#D10B05] pl-[58px]">Daftar
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
            <a class="text-[#D10B05] text-[20px] pb-4 px-11 border-b-4 border-[#D10B05] font-medium cursor-default">Daftar
                Produk</a>
        </p>
        <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
        <!-- SEARCH BAR -->
        <div class="flex mx-11 mt-10 justify-between">
            <div class="flex gap-5">
                <form action="">
                    <div class="relative flex items-center">
                        <input type="text" name="" id="" placeholder="Cari Nama Produk"
                            class="border-solid border-2 border-slate-300 rounded-md w-64 py-2 pl-3 pr-9 focus:outline-[#D10B05]" />
                        <button class="absolute right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="#999"
                                    d="m18.031 16.617l4.283 4.282l-1.415 1.415l-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9s9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617Zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.867-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15Z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <select name="" id="Kategori"
                    class="px-3 py-2 border-solid border-2 border-[#CCCCCC] text-[#999] rounded-md w-36 focus:outline-[#D10B05]">
                    <option value="">Kategori</option>
                    <option value="">Ayam</option>
                    <option value="">Sapi</option>
                </select>
                <select name="" id="Kategori"
                    class="px-3 py-2 border-solid border-2 border-[#CCCCCC] text-[#999] rounded-md w-36 focus:outline-[#D10B05]">
                    <option value="">Filter</option>
                    <option value="">Ayam</option>
                    <option value="">Sapi</option>
                </select>
            </div>
            <a href="/tambahProduk">
                <button class="bg-[#D10B05] px-3 py-2 rounded-md text-white font-semibold hover:bg-[#9F0804]">
                    + Tambah Produk
                </button>
            </a>
        </div>
        <!-- SEARCH BAR -->

        <!-- TABLE -->
        <table class="table-auto w-full mt-5 mb-5" data-aos="fade-right" data-aos-duration="400"
            data-aos-easing="ease-in-out">
            <thead>
                <tr class="text-[#787878] font-semibold border-y-2 border-[#e6e6e6] w-full">
                    <th colspan="2" class="py-4">Info Produk</th>
                    <th class="py-4">Harga</th>
                    <th class="py-4">Varian</th>
                    <th class="py-4">Stok</th>
                    <th colspan="2" class="py-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarProduk as $dp )
                <tr>
                    <td>
                        <img src="{{asset('assets/img_mitra_center/asset/daftarProduk/sapi.png')}}" alt=""
                            class="rounded-lg ml-5" />
                    </td>
                    <td class="font-semibold">
                        {{$dp['nama_produk']}}<br />
                        <p class="font-normal text-[#999]">
                            ID: <span id="id-barang">{{$dp['_id']}}</span>
                        </p>
                    </td>
                    <td class="text-center font-semibold text-[#5e5e5e]">
                        Rp<span id="harga">{{$dp['varian'][0]['harga']}}</span> |
                        Rp<span id="harga">{{$dp['varian'][1]['harga']}}</span>
                    </td>
                    <td class="text-center font-semibold text-[#5e5e5e]">
                        {{$dp['varian'][0]['varian1']}} |
                        {{$dp['varian'][1]['varian2']}}
                    </td>
                    <td class="text-center font-semibold text-[#5e5e5e]">{{$dp['varian'][0]['stok']}} | {{$dp['varian'][1]['stok']}}</td>
                    <td class="text-center">
                        <a href="/tambahProduk/{{$dp['_id']}}"
                            class="border-2 border-[#D10B05] py-2 px-10 rounded-md font-semibold text-[#D10B05] mr-2 hover:bg-[#D10B05] hover:text-white">
                            Edit
                        </a>
                        <a href="/hapusProduk/{{$dp['_id']}}"
                            class="border-2 border-[#D10B05] bg-[#D10B05] py-2 px-8 rounded-md font-semibold text-white hover:bg-[#9F0804] hover:border-[#9F0804]" onclick="return confirm('apakah kamu yakin?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <!-- TABLE -->
    </div>
</div>

@endsection