@extends('templates.layout')
@section('content')

<div class="lg:mt-52 md:mt-24 mt-14 mx-12 sm:mx-3 mb-12">
    <div class="container mx-auto">
        <div class="border-2 border-[#ccc] sm:border-none rounded-lg py-8 sm:py-4 lg:px-12 md:px-5 px-2">
            <div class="flex sm:flex-wrap justify-between items-center">
                <div class="flex items-center gap-5 sm:gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 28 28" fill="none" class="md:w-14 sm:w-10">
                        <path class="hover-fill" d="M25.6654 9.33301C25.6655 9.12128 25.6078 8.91353 25.4985 8.73217L22.338 3.46467C22.1298 3.12032 21.8365 2.83534 21.4863 2.63715C21.1361 2.43895 20.7408 2.33422 20.3384 2.33301H7.65903C6.8447 2.33301 6.0782 2.76701 5.65936 3.46584L2.49886 8.73217C2.38961 8.91353 2.33192 9.12128 2.33203 9.33301C2.33203 10.5055 2.78236 11.566 3.4987 12.3873V23.333C3.4987 23.6424 3.62161 23.9392 3.84041 24.158C4.0592 24.3768 4.35595 24.4997 4.66536 24.4997H13.9987C14.3081 24.4997 14.6049 24.3768 14.8237 24.158C15.0424 23.9392 15.1654 23.6424 15.1654 23.333V17.4997H19.832V23.333C19.832 23.6424 19.9549 23.9392 20.1737 24.158C20.3925 24.3768 20.6893 24.4997 20.9987 24.4997H23.332C23.6415 24.4997 23.9382 24.3768 24.157 24.158C24.3758 23.9392 24.4987 23.6424 24.4987 23.333V12.3873C25.215 11.566 25.6654 10.5055 25.6654 9.33301ZM23.3134 9.62584C23.2416 10.1892 22.967 10.7072 22.541 11.0827C22.1149 11.4583 21.5666 11.6658 20.9987 11.6663C19.7119 11.6663 18.6654 10.6198 18.6654 9.33301C18.6654 9.25367 18.6362 9.18367 18.6199 9.10901L18.6432 9.10434L17.7554 4.66634H20.3384L23.3134 9.62584ZM11.6735 9.40884L12.6209 4.66634H15.3754L16.3239 9.40884C16.283 10.6607 15.2587 11.6663 13.9987 11.6663C12.7387 11.6663 11.7144 10.6607 11.6735 9.40884ZM7.65903 4.66634H10.242L9.35537 9.10434L9.3787 9.10901C9.3612 9.18367 9.33203 9.25367 9.33203 9.33301C9.33203 10.6198 8.28553 11.6663 6.9987 11.6663C6.43075 11.6658 5.88247 11.4583 5.45643 11.0827C5.0304 10.7072 4.7558 10.1892 4.68403 9.62584L7.65903 4.66634ZM11.6654 18.6663H6.9987V15.1663H11.6654V18.6663Z" fill="#D10B05" />
                    </svg>
                    <div>
                        <p class="font-semibold lg:text-xl md:text-lg text-sm">{{$toko->nama_toko}}</p>
                        <div class="mt-3 sm:mt-1 flex items-center gap-4 sm:gap-2">
                            <a href ="https://api.whatsapp.com/send/?phone={{$toko->no_wa}}&text&type=phone_number&app_absent=0" class="font-semibold py-1 rounded-lg border-2 lg:px-14 md:px-7 px-3 border-[#d10b05] text-white bg-[#d10b05] hover:bg-[#9F0804] hover:border-[#9F0804] sm:text-sm">Chat
                                Penjual
                            </a>
                            <div class="tooltip" data-tip="Bagikan">
                                <button class="border-[#ccc] p-1.5 border-2 rounded-lg "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="sm:w-4">
                                        <path fill="#ccc" d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12q0 .175-.025.363T8.9 12.7l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22Zm0-16q.425 0 .713-.288T19 5q0-.425-.288-.713T18 4q-.425 0-.713.288T17 5q0 .425.288.713T18 6ZM6 13q.425 0 .713-.288T7 12q0-.425-.288-.713T6 11q-.425 0-.713.288T5 12q0 .425.288.713T6 13Zm12 7q.425 0 .713-.288T19 19q0-.425-.288-.713T18 18q-.425 0-.713.288T17 19q0 .425.288.713T18 20Zm0-15ZM6 12Zm12 7Z" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-5 sm:mt-3">
                    <div>
                        <div class="flex items-center gap-1 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#f8bd00" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                            </svg>
                            <p class="font-bold text-xl sm:text-base">{{$rating_toko}}</p>
                        </div>
                        <p class="text-sm">Rating & ulasan</p>
                    </div>
                    <img src="{{asset('assets/img_index/asset/navbar/pembatas.svg')}}" alt="" class="" />
                    <div class="text-center">
                        <p class="font-bold text-lg sm:text-base">{{$jumlah_produk}}</p>
                        <p class="text-sm">Jumlah produk</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t-2 border-[#ccc] sm:block hidden"></div>

        <div class="grid grid-cols-12 lg:mt-9 mt-2 lg:gap-10 sm:gap-2">
           @foreach ($produk_toko as $pt)
           @php
                $pd = null;
                foreach ($produk_data as $product) {
                    if ($product['id_produk'] === $pt['_id']) {
                        $pd = $product;
                    break;
                }    
           }
           @endphp
           @if($pd)
            <!-- Baris 1 -->
            <div class="lg:col-span-2 md:col-span-4 lg:mt-0 md:mt-4 mt-3 sm:col-span-6">
                <a href="/produk/{{$pt->_id}}">
                    <div id="card" class="bg-white h-[344px] sm:h-[310px] w-full rounded-2xl drop-shadow-lg border-white border-2 hover:border-[#D10B05] hover:border-2 transition-all duration-200 ease-linear">
                        <img src="" alt="" class="w-[300px] h-[152px] rounded-t-[15px] " />
                        <div class="pt-3 pl-2 ">
                            <p class="text-[14px] sm:text-[12px] leading-4 font-medium lg:pr-5 lg:block hidden">
                                {{(strlen($pt->nama_produk) > 44 ? substr($pt->nama_produk,0,43) .'...' : $pt->nama_produk)}}
                            </p>
                            <p class="text-[14px] sm:text-[12px] leading-4 font-medium lg:pr-5 hidden sm:block">
                                {{(strlen($pt->nama_produk) > 44 ? substr($pt->nama_produk,0,43) .'...' : $pt->nama_produk)}}
                            </p>
                            <p class="font-bold lg:pt-2 sm:pt-1 sm:text-[14px]">
                                Rp<span>{{number_format($pt['varian'][0]['harga1'],0,',')}}</span></p>
                            <p class="pt-5 flex text-[#999] sm:text-xs leading-4">
                                <img class="pr-2 sm:w-6" src="{{asset('assets/img_index/asset/card/clarity_store-solid.svg')}}" alt="" /> 
                                {{(strlen($pt->nama_toko) > 16 ? substr($pt->nama_toko,0,15).'...' : $pt->nama_toko)}}
                            </p>
                            <p class="text-[#D10B05] font-medium flex sm:text-xs sm:mt-1 text-[14px]">
                                <img class="pr-2 sm:w-6" src="{{asset('assets/img_index/asset/card/solar_point-on-map-bold.svg')}}" alt="" />
                                {{$pt['alamat_toko']['alamat']}}
                            </p>
                            <p class="flex text-[#999] sm:text-xs sm:mt-1">
                                <img class="pr-2 sm:w-6" src="{{asset('assets/img_index/asset/card/ic_round-star.svg')}}" alt="" /><span class="pr-1">{{$pd['avgRating']}}</span> |
                                <span class="pl-1 pr-1">{{(isset($pd['jumlah_terjual']) ? $pd['jumlah_terjual'] : 0)}}</span>terjual
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

</body>

</html>
@endsection