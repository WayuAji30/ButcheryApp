@extends('templates.checkout')
@section('content')

<!-- CART -->
<div class="container lg:pt-[201px] md:pt-20 sm:pt-5">
    <div class="grid grid-cols-12">
        <div class="lg:col-span-6 col-span-12 sm:text-sm sm:px-3">
            <div class="flex justify-center items-center lg:mt-20">
                <img src="{{asset('assets/img_index/asset/checkout/Hiro.svg')}}" alt="" class="lg:w-fit w-full">
            </div>
        </div>

        <!-- Right -->
        <div class="lg:col-span-6 col-span-12 lg:mt-9 md:mt-10 mt-10">
            <div class="grid justify-items-center">
                <div class="lg:w-[60%] md:w-[80%] w-full lg:border-2 border-t-2 border-[#CCC] lg:rounded-3xl">
                    <div class="lg:m-7 md:mb-10 sm:mx-4 sm:mb-4">
                        <p class="text-[18px] font-semibold lg:block hidden">Rincian Belanjaan</p>
                        <div class="flex items-center mt-5 justify-between md:hidden sm:hidden">
                            <p class="">Total Harga (0 Produk)</p>
                            <p>Rp<span id="harga-barang"></span></p>
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
                        <form action="" class="lg:mt-6 mt-3">
                            <!-- JANGAN DIHAPUS -->
                            <!-- <label for="my_modal_7"
                                class="lg:py-2 lg:px-[180px] md:px-4 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out cursor-pointer">Bayar</label>
                            <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                            <div class="modal">
                                <div class="modal-box text-center">
                                    <img src="{{asset('assets/img_index/asset/checkout/paymentSuccess.svg')}}" alt=""
                                        class="mx-auto my-auto mt-5 sm:w-20">
                                    <p class="py-4 lg:text-[36px] md:text-[30px] sm:text-[20px] font-semibold">
                                        Pembayaran Berhasil</p>
                                </div>
                                <label class="modal-backdrop" for="my_modal_7">Close</label>
                            </div> -->
                            <button class="lg:py-2 py-1 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804] transition-all duration-200 ease-in-out cursor-pointer">Bayar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART -->
<div class="lg:mt-20 sm:mt-5"></div>

<script>
    document.getElementById('norek').addEventListener('click', function() {
        var teks = this.innerText;
        copyToClipboard(teks);
    });

    function copyToClipboard(text) {
        var tempInput = document.createElement("input");
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Teks berhasil disalin: " + text);
    }
</script>

@vite(['resources/js/app.js', 'resources/js/checkout.js', 'resources/js/time.js'])
@endsection