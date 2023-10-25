@extends('templates.search-product')
@section('content')

<!-- PRODUCT -->
<div class="w-full lg:mt-52 md:mt-60 sm:mt-20">
    <div class="container mx-auto lg:px-[56px] md:px-12 sm:px-5">
        <p class="font-semibold text-2xl sm:text-[20px]">Bersertifikat (<span>30</span>)</p>
        <div class="grid grid-cols-12 mt-9 sm:mt-4 lg:gap-10 sm:gap-2">
            <!-- Baris 1 -->
            @foreach ($data_search as $ds)
            <div class="lg:col-span-2 md:col-span-4 sm:col-span-6">
                <a href="/produk/{{$ds->_id}}">
                    <div
                        class="bg-white lg:h-[344px] sm:h-[310px] lg:w-[207px] sm:w-[160px] rounded-2xl drop-shadow-lg border-white border-2 hover:border-[#D10B05] hover:border-2 transition-all duration-200 ease-linear">
                        <img src="{{asset('storage/img_uploaded/'.$ds['foto']['foto1'])}}" alt=""
                            class="w-[228px] h-[130px] rounded-t-[15px]" />
                        <div class="pt-3 pl-2">
                            <p class="lg:text-[14px] sm:text-[12px] leading-4 font-medium">
                                {{$ds->nama_produk}}
                            </p>
                            <p class="font-bold lg:pt-2 sm:pt-1 sm:text-[14px]">
                                Rp<span>{{number_format($ds['varian'][0]['harga'], 0, ',')}}</span></p>
                            <p class="lg:pt-5 sm:pt-2 flex text-[#999] sm:text-xs">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/clarity_store-solid.svg')}}"
                                    alt="" />{{$ds->nama_toko}}
                            </p>
                            <p class="text-[#D10B05] font-medium flex sm:text-xs sm:mt-1">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/solar_point-on-map-bold.svg')}}"
                                    alt="" />{{$ds['alamat_toko']['alamat']}}
                            </p>
                            <p class="flex text-[#999] sm:text-xs sm:mt-1">
                                <img class="pr-2 sm:w-6"
                                    src="{{asset('assets/img_index/asset/card/ic_round-star.svg')}}" alt="" /><span
                                    class="pr-1">4.7</span> |
                                <span class="pl-1 pr-1">672</span>terjual
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- PRODUCT -->

    @endsection