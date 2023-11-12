@extends('../templates/register-mitra')
@section('content')

@if (!session()->has('login'))
<script>
    document.location.href = "/login";
</script>
@endif

<!-- Register Mitra -->
<div class="container flex justify-around mx-auto lg:px-[85px] md:pr-28 lg:mt-44 md:mt-44 sm:mt-24">
    <!-- TODO Make div below STICKY -->
    <!--DONE-->
    <div class="flex items-start relative">
        <div class="text-center sticky top-[176px] lg:block md:hidden sm:hidden max-sm:hidden" style="width: fit-content">
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
        <div class="lg:block md:block sm:hidden">
            <div class="grid justify-items-end">
                <p class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block font-medium">
                    1
                </p>
                <div class="w-1 h-28 bg-[#D10B05] mr-4 mt-1"></div>
                <p class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block mt-1 font-medium">
                    2
                </p>
                <div class="w-1 h-[490px] bg-[#D10B05] mr-4 mt-1"></div>
                <p class="px-3 py-1 text-[#D10B05] rounded-full border-solid border-2 border-[#D10B05] inline-block mt-1 font-medium">
                    3
                </p>
            </div>
        </div>
        <div class="col-span-5 lg:ml-7 md:ml-7 mx-4">
            <form action="/store_register_mitra" method="POST">
                @csrf

                <input type="hidden" name="id" id="id" value="{{$user->_id}}">

                <p class="font-semibold lg:text-[18px] md:text-[18px] text-base">Masukan Nama Toko Kamu</p>
                <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 lg:mt-5 md:mt-5 sm:mt-2 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05] font-semibold" type="text" name="nama_toko" id="nama_toko" placeholder="" />
                @error('nama_toko')
                    <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                        {{$message}}
                    </p>
                @enderror
                <p class="font-semibold lg:text-[18px] md:text-[18px] text-base lg:mt-16 sm:mt-16 mt-5 mb-4">
                    Masukan Detail Informasi
                </p>
                <label for="email" class="font-medium text-[#787878]">Email</label>
                <br />
                @if ($user->email != "")
                    <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 mb-5 border-solid border-2 text-[#CCCCCC] border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#CCCCCC]" type="text" name="email" id="email" placeholder="" value="{{$user->email}}" readonly/>
                    @error('email')
                        <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                            {{$message}}
                        </p>
                    @enderror
                @else
                    <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]" type="text" name="email" id="email" placeholder="" value="" />
                    @error('email')
                        <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                            {{$message}}
                        </p>
                    @enderror
                @endif

                <br />
                    <label for="notelp" class="font-medium text-[#787878]">No. Telepon</label>
                <br />
                @if ($user->no_hp != "")
                    <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 mb-5 border-solid border-2 text-[#CCCCCC] border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#CCCCCC]" type="text" value = "{{$user->no_hp}}" placeholder="{{$user->no_hp}}" readonly/>
                    @error('no_telp')
                        <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                            {{$message}}
                        </p>
                    @enderror
                @else
                    <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]" type="text" name="no_telp" id="no_telp" placeholder="" value="" />
                    @error('no_telp')
                        <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                            {{$message}}
                        </p>
                    @enderror
                @endif

                <br />

                <label for="whatsapp" class="font-medium text-[#787878]">No. Whatsapp (Contact Person)</label>
                <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 mb-5 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]" type="text" name="no_wa" id="no_wa" placeholder="" value="" />
                @error('no_wa')
                    <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                        {{$message}}
                    </p>
                @enderror

                <br />

                <label for="norek" class="font-medium text-[#787878]">No. Rekening</label>

                <br />

                <input class="lg:px-5 md:px-5 sm:px-2 lg:py-3 md:py-3 sm:py-2 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]" type="text" name="norek" id="norek" placeholder="" />
                @error('norek')
                    <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                        {{$message}}
                    </p>
                @enderror
                <p class="font-semibold lg:text-[18px] md:text-[18px] text-base lg:mt-20 md:mt-20 mt-5 mb-4">
                    Masukan Alamat Toko
                </p>
                <label for="" class="text-[#787878]">Provinsi</label> 
                
                <br />
                
                <select name="provinsi" id="provinsi" class="lg:pl-5 md:pl-5 sm:pl-1 lg:py-3 md:py-3 sm:py-2 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg w-[100%] focus:outline-[#D10B05]">
                    <option value="">Pilih Provinsi</option>
                </select>
                @error('provinsi')
                    <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                        {{$message}}
                    </p>
                @enderror

                <br />

                <div class="flex mt-4 lg:gap-16 md:gap-5 sm:gap-3 mb-5">
                    <div class="flex-col">
                        <label for="kota">Kota</label> <br>
                        <select name="kota" id="kota" class="lg:pl-5 md:pl-5 sm:pl-1 lg:py-3 md:py-3 sm:py-2 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] md:w-[217px] sm:w-[155px] focus:outline-[#D10B05]">
                            <option value="">Pilih Kota</option>
                        </select>
                        @error('kota')
                            <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="flex-col">
                        <label for="kecamatan">Kecamatan</label> <br>
                        <select name="kecamatan" id="kecamatan" class="lg:pl-5 md:pl-5 sm:pl-1 lg:py-3 md:py-3 sm:py-2 mt-3 border-solid border-2 border-[#CCCCCC] rounded-lg lg:w-[200px] md:w-[217px] sm:w-[155px] focus:outline-[#D10B05]">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                        @error('kecamatan')
                            <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                </div>
                <label for="alamat" class="font-medium text-[#787878]">Alamat Detail</label>
                <br />
                <textarea class="peer block min-h-[auto] w-full mt-3 mb-5 rounded border-2 bg-white border-solid border-[#CCCCCC] px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary focus:border-[#D10B05] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="alamat" name="alamat" rows="4"></textarea>
                @error('alamat')
                    <p class="mt-2 ml-12 text-start text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                        {{$message}}
                    </p>
                @enderror
                <p class="text-[#B3B3B3]">
                    Dengan mendaftar, saya menyetujui <br />
                    <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                        Syarat dan Ketentuan</a>
                    serta
                    <a href="" class="font-medium text-[#D10B05] hover:text-[#9F0804]">
                        Kebijakan Privasi</a>
                </p>
                <button class="text-white bg-[#D10B05] lg:py-3 md:py-3 sm:py-2 w-[100%] rounded-lg font-semibold mt-8 hover:bg-[#9F0804] transition-all duration-200 ease-linear">
                    Daftar
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Register Mitra -->

@endsection