<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />

    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link
      rel="shortcut icon"
      href="asset/navbar/logoTitle.svg"
      type="image/x-icon"
    />
    <style>
      #remove button:hover svg path {
        fill: #d10b05;
      }
    </style>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
      <div class="lg:block md:hidden">
        <div class="bg-[#D10B05] py-4">
          <div class="lg:mx-12 md:mx-8 flex items-center justify-between">
            <div class="flex">
              <img src="asset/navbar/phone.svg" alt="" class="pr-2 -mt-2" />
              <p class="text-white lg:mr-4 md:mr-0 md:text-xs lg:text-base">
                Butchery app is now available on
              </p>
              <a href="" class="mr-1"
                ><img src="asset/navbar/googleplay.svg" alt=""
              /></a>
              <a href=""><img src="asset/navbar/appstore.svg" alt="" /></a>
            </div>
            <div
              class="flex lg:gap-5 md:gap-1 md:text-xs lg:text-base items-center"
            >
              <a href="" class="text-white flex"
                ><img
                  src="asset/navbar/office.svg"
                  alt=""
                  class="pr-1 md:w-[25%] lg:w-fit"
                />Tentang Kami</a
              >
              <!-- <a href="register_mitra.html" class="text-white flex"
                ><img src="asset/navbar/mitra.svg" alt="" class="pr-1" />Daftar
                Jadi Mitra
              </a> -->
              <a href="" class="text-white flex"
                ><img src="asset/navbar/help.svg" alt="" class="pr-1" />Bantuan
              </a>
              <a href="" class="text-white flex"
                ><img src="asset/navbar/globe.svg" alt="" class="pr-1" />Bahasa
                Indonesia<img src="asset/navbar/arrowUp.svg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white drop-shadow-md">
        <div class="pt-6 pb-7 items-center justify-between flex px-10 mr-5">
          <div class="flex items-center">
            <a href="index.html"
              ><img
                src="asset/navbar/LogoButchery.svg"
                alt="LogoButchery"
                class="mr-5"
            /></a>
          </div>
          <div class="lg:gap-3 md:gap-1 flex items-center" id="icon-bar">
            <a href=""
              ><img
                src="asset/navbar/profile.svg"
                alt=""
                class="border-2 border-[#D10B05] rounded-full"
            /></a>
            <p class="font-medium">Rahmat Messi Talahu</p>
          </div>
        </div>
      </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CART -->
    <div class="container pt-[201px]">
      <div class="grid grid-cols-12">
        <div class="col-span-8">
          <div class="ml-24">
            <button
              class="text-[#D10B05] text-[20px] pb-4 px-12 border-b-4 border-[#D10B05] font-medium"
            >
              Checkout
            </button>
          </div>
          <div class="ml-24">
            <!-- Product -->
            <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
              <div class="flex items-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="black"
                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075l2.025 2.025ZM6 9h12V7H6v2Zm12 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23ZM3 22V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22Zm3-5h5.075q.075-.525.225-1.025t.375-.975H6v2Zm0-4h7.1q.95-.925 2.213-1.463T18 11H6v2Zm-1 6.05V5v14.05Z"
                  />
                </svg>
                <p class="font-semibold text-[18px]">Produk Pesanan</p>
              </div>
              <div class="flex items-center mt-3">
                <img src="asset/cart/produk.png" alt="" class="rounded-md" />
                <ul class="ml-6">
                  <li>
                    Daging US Beef Slice Premium <br />
                    Quality -
                    <span class="text-[#D10B05] font-semibold">1kg</span>
                  </li>
                  <li class="font-semibold mt-4">Rp<span>169.500</span></li>
                </ul>
              </div>
              <div class="mt-10"></div>
            </div>
            <!-- Alamat -->
            <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
              <div class="flex items-center justify-between mr-8">
                <div class="flex items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="black"
                      d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z"
                    />
                  </svg>
                  <p class="font-semibold text-[18px]">Alamat Pengiriman</p>
                </div>
                <form action="">
                  <button class="text-[#D10B05] font-semibold">Ubah</button>
                </form>
              </div>
              <div class="mt-3">
                <p id="alamat-user">
                  Perumahan Satoru Residance, Jl Srimahi 39, Blok E4 No. 13,
                  <br />
                  RT 09 RW 02 Jawa Barat, Jawa Barat, Bandung
                </p>
                <p class="font-semibold mt-4" id="phone-user">
                  (+62)876526765142
                </p>
              </div>
              <div class="mt-10"></div>
            </div>
            <!-- Payment -->
            <div class="w-[100%] bg-white border-b-4 border-[#e6e6e6] mt-8">
              <div class="flex items-center justify-between mr-8">
                <div class="flex items-center gap-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 28 28"
                  >
                    <path
                      fill="black"
                      d="M5.754 5a3.75 3.75 0 0 0-3.75 3.75v.75H26v-.75A3.75 3.75 0 0 0 22.25 5H5.755Zm-3.75 14.25V11H26v8.25A3.75 3.75 0 0 1 22.25 23H5.755a3.75 3.75 0 0 1-3.75-3.75ZM18.25 16.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                    />
                  </svg>
                  <p class="font-semibold text-[18px]">Metode Pembayaran</p>
                </div>
              </div>
              <div class="mt-3">
                <form action="">
                  <div class="flex mt-5 gap-5">
                    <button
                      class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/BCA.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/BNI.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/BRI.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/Mandiri.svg" alt="" />
                    </button>
                  </div>
                  <div class="flex mt-5 gap-5">
                    <button
                      class="bg-white px-2 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/BSI.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/Permata.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-3 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/CimbNiaga.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-4 py-2 shadow-md rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/SeaBank.svg" alt="" />
                    </button>
                  </div>
                  <div class="flex mt-5 gap-5">
                    <button
                      class="bg-white px-4 py-2 shadow-lg rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/ovo.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-3 py-2 shadow-lg rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/dana.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-4 py-2 shadow-lg rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/gopay.svg" alt="" />
                    </button>
                    <button
                      class="bg-white px-5 py-2 shadow-lg rounded-lg border-2 border-slate-100"
                    >
                      <img src="asset/footer/spay.svg" alt="" />
                    </button>
                  </div>
                </form>
              </div>
              <div class="mt-10"></div>
            </div>
            <!-- Pengiriman -->
            <div class="w-[100%] bg-white mt-8">
              <div class="flex items-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="black"
                    d="M3 13.5L2.25 12H7.5l-.6-1.5H2L1.25 9h7.8l-.6-1.5H1.11L.25 6H4a2 2 0 0 1 2-2h12v4h3l3 4v5h-2a3 3 0 0 1-3 3a3 3 0 0 1-3-3h-4a3 3 0 0 1-3 3a3 3 0 0 1-3-3H4v-3.5H3m16 5a1.5 1.5 0 0 0 1.5-1.5a1.5 1.5 0 0 0-1.5-1.5a1.5 1.5 0 0 0-1.5 1.5a1.5 1.5 0 0 0 1.5 1.5m1.5-9H18V12h4.46L20.5 9.5M9 18.5a1.5 1.5 0 0 0 1.5-1.5A1.5 1.5 0 0 0 9 15.5A1.5 1.5 0 0 0 7.5 17A1.5 1.5 0 0 0 9 18.5Z"
                  />
                </svg>
                <p class="font-semibold text-[18px]">Opsi Pengiriman</p>
              </div>
              <div class="mt-3">
                <button class="pl-5 py-2 border-l-4 border-[#D10B05]">
                  <div class="flex items-center font-semibold gap-12">
                    <p class="text-[20px]">Motor(1-2)</p>
                    <p class="text-[18px] text-[#D10B05]">
                      Rp<span>9.900</span>
                    </p>
                  </div>
                  <p class="text-start mt-2">
                    Pengiriman menggunakan kendaraan motor. Digunakan untuk
                    <br />
                    pengiriman 1 hari sampai dan jarak dekat.
                  </p>
                </button>
                <button class="pl-5 py-2 border-l-4 border-[#D10B05] mt-4">
                  <div class="flex items-center font-semibold gap-12">
                    <p class="text-[20px]">Mobil Box (3-5 Hari)</p>
                    <p class="text-[18px] text-[#D10B05]">
                      Rp<span>18.900</span>
                    </p>
                  </div>
                  <p class="text-start mt-2">
                    Pengiriman menggunakan kendaraan mobil box. Digunakan untuk
                    <br />
                    pengiriman antar kota dan pembelian dalam jumlah tertentu.
                  </p>
                </button>
              </div>
              <div class=""></div>
            </div>
          </div>
        </div>

        <!-- Right -->
        <div class="col-span-4">
          <div class="grid justify-items-center">
            <div
              class="lg:w-[75%] md:w-[100%] h-[100%] border-2 border-[#CCC] rounded-3xl"
            >
              <div class="m-7">
                <p class="text-[18px] font-semibold">Rincian Belanjaan</p>
                <div class="flex items-center mt-5 justify-between">
                  <p class="">Total Harga (1 Produk)</p>
                  <p>Rp<span id="harga-barang">169.500</span></p>
                </div>
                <div class="flex items-center mt-2 justify-between">
                  <p class="">Total Ongkos Kirim</p>
                  <p>Rp<span id="ongkir">9.900</span></p>
                </div>
                <div class="flex items-center mt-2 justify-between">
                  <p class="">Biaya Layanan Aplikasi</p>
                  <p>Rp<span id="layanan">1.000</span></p>
                </div>
                <div
                  class="border-t-2 border-solid border-[#E6E6E6] mt-5"
                ></div>
                <div class="flex items-center justify-between mt-8">
                  <p class="text-[#999] font-medium">Total Belanja</p>
                  <p class="text-[24px] font-semibold">
                    Rp<span id="harga-total">185.000</span>
                  </p>
                </div>
                <form action="" class="mt-6">
                  <button
                    class="py-2 lg:px-7 md:px-4 border-2 border-[#D10B05] bg-[#D10B05] w-full text-white rounded-md font-medium hover:bg-[#9F0804] hover:border-[#9F0804]"
                  >
                    Buat Pesanan
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CART -->
    <div class="mt-20"></div>
  </body>
</html>
