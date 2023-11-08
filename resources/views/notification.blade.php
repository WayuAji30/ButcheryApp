@extends('templates.notif')
@section('content')

<!-- PROFILE -->
<div class="container lg:pt-52 md:pt-24 sm:pt-20 pb-5">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="grid justify-items-center sm:justify-items-start md:mx-2 sm:mx-2">
                <div class="bg-white rounded-md lg:w-[80%] md:w-full w-[150%] shadow-md">
                    <p class="lg:mt-7 md:mt-5">
                        <a href="" class="text-[#D10B05] text-[20px] pb-4 lg:px-11 px-4 sm:text-[16px] lg:border-b-4 border-b-2 border-[#D10B05] font-medium">Daftar
                            Pesanan</a>
                    </p>
                    <div class="ml-12 border-t-2 border-solid border-[#E6E6E6] mt-4"></div>
                    <!-- TABLE -->
                    <table class="w-full mt-5 mb-5">
                        <thead>
                            <tr class="text-[#787878] font-semibold border-b-2 border-[#e6e6e6] w-full text-center  ">
                                <th colspan="2" class="lg:py-4">Info Produk</th>
                                <th class="lg:py-4 py-2">Harga</th>
                                <th class="lg:py-4 py-2">Varian</th>
                                <th class="lg:py-4 py-2">Status</th>
                                <th class="lg:py-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody data-aos="fade-right" data-aos-duration="400" data-aos-easing="ease-in-out">
                            @foreach ($pesanan as $p)
                            <tr class="border-b-2 border-[#E6E6E6]">
                                <td class="lg:pl-10 py-5 mx-auto my-auto">
                                    <img src="{{asset('storage/img_uploaded/'. $p->foto)}}" alt="" class="w-24 rounded-md">
                                </td>
                                <td>
                                    <ul>
                                        <li class="font-semibold sm:text-sm">{{$p->nama_produk}}</li>
                                        <li class="text-[#999] mt-1 sm:text-sm">{{$data_user->username}}</li>
                                    </ul>
                                </td>
                                <td class="text-center sm:text-sm">Rp{{number_format($p->harga,0,',')}}</td>
                                <td class="text-center sm:text-sm">{{$p->varian}}</td>
                                <td class="text-center sm:text-sm">{{$p->status}}</td>
                                <td class="text-center sm:text-sm">
                                    @if($p->status === "Sampai")
                                    <!-- The button to open modal -->
                                    <label for="my_modal_7" class="btn-nilai border-2 bg-[#d10b05] py-2 px-10 rounded-md font-semibold text-white mr-2 hover:hover:bg-[#9F0804] border-[#d10b05] hover:border-[#9F0804] hover:text-white transition-all duration-200 ease-linear cursor-pointer" data-id_user="{{$p->id_user}}" data-id_produk="{{$p->id_produk}}" data-id_pesanan={{$p->_id}}>Nilai</label>
                                    @elseif($p->status === "Sudah dinilai")
                                    <label for="" class="border-[#ccc] border-2 py-2 px-10 rounded-md font-semibold text-[#ccc] mr-2 transition-all duration-200 ease-linear cursor-pointer">Nilai</label>
                                    @else
                                    <label for="" class="border-[#ccc] border-2 py-2 px-10 rounded-md font-semibold text-[#ccc] mr-2 transition-all duration-200 ease-linear cursor-pointer">Nilai</label>
                                    @endif

                                    <!-- Put this part before </body> tag -->
                                    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box">
                                            <p class="font-semibold text-[20px] text-[#787878] mt-3">Beri Review Produk
                                            </p>
                                            <div class="border-t-2 border-[#e6e6e6] mt-7"></div>
                                            <img src="{{asset('assets/img_index/asset/notification/profile.svg')}}" alt="" class="mx-auto my-auto border-2 border-[#d10b05] rounded-full mt-7">
                                            <div class="text-center mt-5">
                                                <p class="font-semibold text-[18px]">{{$data_user->username}}</p>
                                                <p class="text-[#787878]">{{$p->nama_produk}}</p>
                                                <form action="/store_rreviews" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id_pesanan" id="id_pesanan" value="">
                                                    <input type="hidden" name="id_user" id="id_user" value="">
                                                    <input type="hidden" name="id_produk" id="id_produk" value="">
                                                    <div class="rating mt-5 gap-3">
                                                        <input type="radio" name="rating" class="mask mask-star-2 bg-[#d10b05]" value="1" />
                                                        <input type="radio" name="rating" class="mask mask-star-2 bg-[#d10b05]" value="2" />
                                                        <input type="radio" name="rating" class="mask mask-star-2 bg-[#d10b05]" value="3" />
                                                        <input type="radio" name="rating" class="mask mask-star-2 bg-[#d10b05]" value="4" checked />
                                                        <input type="radio" name="rating" class="mask mask-star-2 bg-[#d10b05]" value="5" />
                                                    </div>
                                            </div>
                                            <textarea name="reviews" id="reviews" cols="46" rows="4" placeholder="Berikan Ulasan Anda" class="border-[#ccc] border-2 rounded-lg pl-4 pt-3 focus:outline-[#d10b05] mt-7"></textarea>
                                            <button for="my_modal_7" class="bg-[#d10b05] mt-8 mb-4 py-2 w-[80%] rounded-md font-semibold text-white hover:bg-[#9F0804] transition-all duration-200 ease-linear">Kirim</button>
                                            </form>
                                        </div>
                                        <label class="modal-backdrop" for="my_modal_7">Close</label>
                                    </div>
                                    @if($p->status === "sudah bayar" || $p->status === "Kurir menuju toko anda" ||
                                    $p->status == "Sampai" || $p->status == "Sudah dinilai")
                                    <button disabled class="btn-sampai border-[#ccc] py-2 px-8 rounded-md font-semibold border-2 text-[#ccc] mr-2 transition-all duration-200 ease-linear sm:mt-5" data-id_user="{{$p->id_user}}" data-id_pesanan="{{$p->_id}}">Sampai</button>
                                    @else
                                    <button class="btn-sampai bg-[#d10b05] py-2 px-8 rounded-md font-semibold border-2 text-white mr-2 hover:bg-[#9F0804] transition-all duration-200 ease-linear sm:mt-5" data-id_user="{{$p->id_user}}" data-id_pesanan="{{$p->_id}}">Sampai</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- PROFILE -->

@endsection