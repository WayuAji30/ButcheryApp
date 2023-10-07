<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/css/ouput.css'])

    <title>Butchery | Beli Daging Segar Dengan Kualitas Terbaik Disini</title>
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <style>
    #remove button:hover svg path {
        fill: #d10b05;
    }

    button.active {
        border-color: #d10b05;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50">
        <div class="lg:block md:hidden">
            <div class="bg-[#D10B05] py-4">
                <div class="mx-12 flex items-center justify-between">
                    <div class="flex">
                        <img src="{{asset('assets/img_index/asset/navbar/phone.svg')}}" alt="phone"
                            class="pr-2 -mt-2" />
                        <p class="text-white mr-4">Butchery app is now available on</p>
                        <a href="" class="mr-1"><img src="{{asset('assets/img_index/asset/navbar/googleplay.svg')}}"
                                alt="googleplay" /></a>
                        <a href=""><img src="{{asset('assets/img_index/asset/navbar/appstore.svg')}}"
                                alt="appstore" /></a>
                    </div>
                    <div class="flex gap-5 items-center">
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/office.svg')}}" alt="office"
                                class="pr-1" />Tentang Kami</a>
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/help.svg')}}" alt="help"
                                class="pr-1" />Bantuan
                        </a>
                        <a href="" class="text-white flex"><img
                                src="{{asset('assets/img_index/asset/navbar/globe.svg')}}" alt="" class="pr-1" />Bahasa
                            Indonesia<img src="{{asset('asset/navbar/arrowUp.svg')}}" alt="arrowUp" /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white drop-shadow-md">
            <div class="pt-6 pb-7 items-center justify-between flex px-10 mr-5">
                <div class="flex items-center">
                    <a href="/index"><img src="{{asset('assets/img_index/asset/navbar/LogoButchery.svg')}}"
                            alt="LogoButchery" class="mr-5" /></a>
                </div>
                <div class="lg:gap-3 md:gap-1 flex items-center" id="icon-bar">
                    <a href=""><img src="{{asset('assets/img_index/asset/navbar/profile.svg')}}" alt="profile"
                            class="border-2 border-[#D10B05] rounded-full" /></a>
                    <p class="font-medium">Rahmat Messi Talahu</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    @yield('content')
    @vite(['resources/js/app.js' , 'resources/js/cart.js'])
</body>

</html>