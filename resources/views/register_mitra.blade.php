@extends('../templates/register-mitra')
@section('content')

<!-- Register Mitra -->
<div class="container flex justify-around mx-auto lg:px-[85px] md:pr-28  mt-44">
    <!-- TODO Make div below STICKY -->
    <!--DONE-->
    <div class="flex items-start relative">
        <div class="text-center sticky top-[176px] lg:block md:hidden sm:hidden max-sm:hidden"
            style="width: fit-content">
            <h1 class="font-semibold text-[28px]">
                Diem Di Rumah Dagangan Laris?
            </h1>
            <p class="text-[#787878] pt-3">
                Sekarang dagang gaperlu keluar, cukup di rumah aja!
            </p>
            <img src="{{asset('assets/img_index/asset/registerMitra/hiro.svg')}}" alt="" class="mt-12" />
        </div>
    </div>
    <div class="flex justify-center">
        <div class="">
            <div class="grid justify-items-end">
                <p
                    class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block font-medium">
                    1
                </p>
                <div class="w-1 h-28 bg-[#D10B05] mr-4 mt-1"></div>
                <p
                    class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block mt-1 font-medium">
                    2
                </p>
                <div class="w-1 h-[490px] bg-[#D10B05] mr-4 mt-1"></div>
                <p
                    class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block mt-1 font-medium">
                    3
                </p>
            </div>
        </div>
        <div class="col-span-5 ml-7">
            <form action="/daftarProduk">
                <p class="font-semibold text-[18px]">Masukan Nama Toko Kamu</p>
                <input
                    class="px-5 py-3 mt-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]"
                    type="text" name="" id="" placeholder="" required />
                <p class="font-semibold text-[18px] mt-16 mb-4">
                    Masukan Detail Informasi
                </p>
                <label for="email" class="font-medium text-[#787878]">Email</label>
                <br />
                <input
                    class="px-5 py-3 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]"
                    type="text" name="" id="email" placeholder="Messitahaluasix@gmail.com" required disabled />
                <br />
                <label for="notelp" class="font-medium text-[#787878]">No. Telepon</label>
                <br />
                <input
                    class="px-5 py-3 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]"
                    type="tel" name="" id="notelp" placeholder="" required />
                <br />
                <label for="norek" class="font-medium text-[#787878]">No. Whatsapp (Contact Person)</label>
                <br />
                <input
                    class="px-5 py-3 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]"
                    type="tel" name="" id="norek" placeholder="" required />
                <label for="whatsapp" class="font-medium text-[#787878]">No. Rekening</label>
                <br />
                <input
                    class="px-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]"
                    type="text" name="" id="whatsapp" placeholder="" required />

                <p class="font-semibold text-[18px] mt-20 mb-4">
                    Masukan Alamat Toko
                </p>
                <label for="" class="text-[#787878]">Provinsi</label> <br />
                <select required name="" id=""
                    class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                    <option value=""></option>
                    <option value="">DKI Jakarta</option>
                    <option value="">Jawa Barat</option>
                    <option value="">Jawa Tengah</option>
                </select><br />
                <div class="flex mt-4 lg:gap-16 md:gap-5 mb-5">
                    <div class="flex-col">
                        <label for="kota">Kota</label>
                        <select required name="" id="kota"
                            class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[120%] md:w-full focus:outline-[#D10B05]">
                            <option value=""></option>
                            <option value="">Bojong Gede</option>
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                        </select>
                    </div>
                    <div class="flex-col">
                        <label for="kecamatan">Kecamatan</label>
                        <select required name="" id="kecamatan"
                            class="pl-5 py-3 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[100%] md:w-[80%] focus:outline-[#D10B05]">
                            <option value=""></option>
                            <option value="">Gambir</option>
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                        </select>
                    </div>
                </div>
                <label for="alamat" class="font-medium text-[#787878]">Alamat Detail</label>
                <br />
                <!-- <input
                    class="px-5 py-3 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] h-28 focus:outline-[#D10B05]"
                    type="text" name="" id="alamat" placeholder="" required /> -->
                <textarea
                    class="peer block min-h-[auto] w-full mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary focus:border-[#D10B05] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="alamat" rows="4" required></textarea>
                <p class="text-[#B3B3B3]">
                    Dengan mendaftar, saya menyetujui <br />
                    <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                        Syarat dan Ketentuan</a>
                    serta
                    <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                        Kebijakan Privasi</a>
                </p>
                <button class="text-white bg-[#D10B05] py-3 w-[100%] rounded-lg font-semibold mt-8 hover:bg-[#9F0804]">
                    Daftar
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Register Mitra -->

@endsection