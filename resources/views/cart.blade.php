@extends('templates.cart-checkout')
@section('content')

<!-- CART -->
<div class="container pt-[201px]">
    <div class="grid grid-cols-12">
        <div class="col-span-8">
            <div class="ml-24">
                <button class="text-[#D10B05] text-[20px] pb-4 px-12 border-b-4 border-[#D10B05] font-medium cursor-default">
                    Keranjang
                </button>
            </div>
            <div class="ml-24">
                <!--  -->
                @foreach ($cart_items as $ci )
                <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-11 cart-item">
                    <div class="flex items-center">
                        <input 
                        type="checkbox" 
                        checked="checked" 
                        class="harga-item checkbox checkbox-error mr-6" 
                        data-harga = "{{(isset($ci->harga)) ? $ci->harga * $ci->qty : ''}}"
                        />
                        
                        <img src="{{asset('assets/img_index/asset/cart/produk.png')}}" alt="" class="rounded-md" />
                        <ul class="ml-6">
                            <li>
                                {{(isset($ci->nama_produk)) ? $ci->nama_produk : ''}} <br />
                                <span class="text-[#D10B05] font-semibold"> {{(isset($ci->varian)) ? $ci->varian : ''}} </span>
                            </li>
                            <li class="font-semibold mt-4">
                                Rp<span id="harga"> {{(isset($ci->harga)) ? $ci->harga * $ci->qty : ''}} </span>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="my-10 flex justify-between items-center">
                        <input type="text" name="" id="" placeholder="Tambahkan Catatan" class="border-b-2 border-[#e6e6e6] w-[40%] pr-4 ml-12 focus:border-[#D10B05] focus:outline-none" value = " {{$ci->note}} " />
                        <div class="flex items-center gap-4 mr-20">
                            <form action="/deleteCart" method="POST">
                                @csrf
                                <input type="hidden" name="id_cart_items" id = "id_cart_items" value = "{{$ci->_id}}">
                                <button id="btn-remove" onclick="return confirm('apakah anda yakin?')">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                        <path fill="none" d="M296 64h-80a7.91 7.91 0 0 0-8 8v24h96V72a7.91 7.91 0 0 0-8-8Z" />
                                        <path fill="#b3b3b3" d="M432 96h-96V72a40 40 0 0 0-40-40h-80a40 40 0 0 0-40 40v24H80a16 16 0 0 0 0 32h17l19 304.92c1.42 26.85 22 47.08 48 47.08h184c26.13 0 46.3-19.78 48-47l19-305h17a16 16 0 0 0 0-32ZM192.57 416H192a16 16 0 0 1-16-15.43l-8-224a16 16 0 1 1 32-1.14l8 224A16 16 0 0 1 192.57 416ZM272 400a16 16 0 0 1-32 0V176a16 16 0 0 1 32 0Zm32-304h-96V72a7.91 7.91 0 0 1 8-8h80a7.91 7.91 0 0 1 8 8Zm32 304.57A16 16 0 0 1 320 416h-.58A16 16 0 0 1 304 399.43l8-224a16 16 0 1 1 32 1.14Z" />
                                    </svg>
                                </button>
                            </form>
                            <button class="btn-action" id = "mines">
                                <img src="{{asset('assets/img_index/asset/cart/mines.svg')}}" alt="" />
                            </button>
                            <span class="font-semibold" id="jumlah-barang">{{(isset($ci->qty)) ? $ci->qty : ''}}</span>
                            <button class="btn-action" id = "plus">
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
        <div class="col-span-4">
            <div class="grid justify-items-center">
                <div class="lg:w-[65%] md:w-[100%] h-[100%] border-2 border-[#CCC] rounded-3xl">
                    <div class="m-7">
                        <p class="text-[18px] font-semibold">Tinggal Klik Beli</p>
                        <p class="mt-8 text-[#999] font-medium">Jumlah Produk</p>
                        <p class="mt-1 font-semibold text-[18px]">
                            <span id="jumlah-produk"></span> Produk
                        </p>
                        <div class="border-t-2 border-solid border-[#E6E6E6] mt-5"></div>
                        <p class="mt-8 text-[#999] font-medium">Total Harga</p>
                        <p class="text-[#D10B05] text-[24px] font-semibold">
                            Rp<span id="harga-total"></span>
                        </p>
                        <form action="/checkOut" class="mt-6">
                            <button class="py-2 lg:px-7 md:px-4 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804]">
                                Beli
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART -->

<div class="border-t-2 border-solid border-[#E6E6E6] mt-40"></div>

<!-- FOOTER -->
<footer>
    <div class="w-full mt-12 mb-12">
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
                <div class="lg:col-span-2 md:col-span-6 sm:col-span-6 lg:mt-0 md:mt-0 sm:mt-0">
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
                    <p class="text-[#B3B3B3] mt-20">
                        © Butchery 2023. Hak Cipta Dilindungi
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

@vite(['resources/js/app.js', 'resources/js/product.js' ,'resources/js/cart.js'])
<script>
   
// Mengambil semua checkbox
const checkboxes = document.querySelectorAll('.checkbox');
const plusButtons = document.querySelectorAll('#plus');
const minesButtons = document.querySelectorAll('#mines');
const jumlahBarangElements = document.querySelectorAll('#jumlah-barang');
const hargaElements = document.querySelectorAll('#harga');

// Mendengarkan perubahan pada checkbox
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
        perbaruiJumlahProduk();
        perbaruiTotalHarga();
    });
});

// Fungsi untuk menghitung jumlah produk yang dicentang
function perbaruiJumlahProduk() {
    const jumlahProduk = document.querySelectorAll('.checkbox:checked').length;
    document.getElementById("jumlah-produk").textContent = jumlahProduk;
}

plusButtons.forEach((button, index) => {
    button.addEventListener('click', function () {
        // Mengambil kuantitas dan harga dari elemen terkait
        let jumlah = parseInt(jumlahBarangElements[index].textContent);
        let harga = parseInt(hargaElements[index].textContent);

        // Menambah satu kuantitas
        jumlah++;
        jumlahBarangElements[index].textContent = jumlah;

        // Menghitung harga total dan memperbarui tampilan
        hargaElements[index].textContent = (harga * jumlah);
        perbaruiTotalHarga();
    });
});

minesButtons.forEach((button, index) => {
    button.addEventListener('click', function () {
        // Mengambil kuantitas dan harga dari elemen terkait
        let jumlah = parseInt(jumlahBarangElements[index].textContent);
        let harga = parseInt(hargaElements[index].textContent);

        // Mengurangi satu kuantitas jika jumlah lebih dari 1
        if (jumlah > 1) {
            jumlah--;
            jumlahBarangElements[index].textContent = jumlah;

            // Menghitung harga total dan memperbarui tampilan
            hargaElements[index].textContent = (harga * jumlah);
            perbaruiTotalHarga();
        }
    });
});

// Fungsi untuk menghitung total harga
function hitungTotalHarga() {
    let total = 0;
    // Mengambil semua checkbox yang dicentang
    const checkedCheckboxes = document.querySelectorAll('.checkbox:checked');
    
    checkedCheckboxes.forEach(function (checkbox) {
        const item = checkbox.closest('.bg-white');
        const hargaItem = parseInt(item.querySelector("#harga").textContent.replace(/\D/g, ''));
        total += hargaItem;
    });

    return total;
}

// Fungsi untuk memperbarui tampilan total harga
function perbaruiTotalHarga() {
    const totalHarga = hitungTotalHarga();
    document.getElementById("harga-total").textContent = totalHarga.toLocaleString("id-ID");
}

// Memanggil fungsi perbaruiTotalHarga() saat halaman dimuat
perbaruiTotalHarga();

</script>

</body>
</html>
@endsection