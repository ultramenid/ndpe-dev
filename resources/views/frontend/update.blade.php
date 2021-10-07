@extends('layouts.indexLayout')

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-update-ndpe py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4 sm:mt-12 sm-6">
                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595436986_5f186fba23a5a.gif" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center " >

                    <p class="text-2xl  text-white font-notoserif cursor-pointer hover:underline pt-2">Analisis citra: Deforestasi dalam konsesi Djarum Grup di Kaltim</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-white">Explore More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595501900_5f196d4c899ab.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center ">

                    <p class="text-2xl text-white font-notoserif cursor-pointer hover:underline pt-2">Deforestasi di Muara Sungai Landak, konsesi terhubung APP</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-white">Explore More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595585064_5f1ab228b5098.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center">

                    <p class="text-2xl text-white font-notoserif cursor-pointer hover:underline pt-2">Kebijakan land-swap: Setengah hati lindungi gambut & hutan alam</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-white">Explore More</a>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-ndpe-profile min-h-screen">
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class="mt-2">
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <h2 class="sm:text-4xl text-2xl font-notoserif">Cetak sawah di gambut Kalteng potensial hadirkan petaka baru</h2>
                        <p class="mt-6">Jangan gunakan pandemi sebagai alasan mengeksploitasi gambut. Berhentilah mengulang kesalahan Proyek Lahan Gambut Sejuta Hektar.</p>
                    </div>
                    <div class="sm:block hidden w-3/12">
                        <img class="h-40 w-72 bg-cover bg-center " src="https://pasopati.id/uploads/artikel/1594451631_5f0966af0f2ab.jpeg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-2">
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <h2 class="tsm:text-4xl text-2xl font-notoserif">Industri pulp perparah risiko kebakaran hutan dan lahan gambut</h2>
                        <p class="mt-6">Meski perusahaan HTI menyatakan komitmen mengurangi risiko kebakaran, tapi kebakaran terus terjadi di konsesi HTI. Termasuk tahun 2019.</p>
                    </div>
                    <div class="sm:block hidden w-3/12">
                        <img class="h-40 w-72 bg-cover bg-center " src="https://pasopati.id/uploads/artikel/1595583301_5f1aab4504df3.jpeg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-2">
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <h2 class="sm:text-4xl text-2xl font-notoserif">2018, APP dan APRIL masih terima kayu kontroversial Djarum Grup</h2>
                        <p class="mt-6">Meski telah diungkap tahun sebelumnya, tahun 2018 ternyata APP dan APRIL tetap membeli kayu kontroversial Djarum Grup.</p>
                    </div>
                    <div class="sm:block hidden w-3/12">
                        <img class="h-40 w-72 bg-cover bg-center " src="https://pasopati.id/uploads/artikel/1595583848_5f1aad68c07c0.jpeg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-2">
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <h2 class="sm:text-4xl text-2xl font-notoserif">Pengakuan APP: Terhubung dengan perusahaan bermasalah</h2>
                        <p class="mt-6">Daftar perusahaan yang dideklarasikan APP belum mencakup seluruh struktur perusahaan APP/Sinarmas.</p>
                    </div>
                    <div class="sm:block hidden w-3/12">
                        <img class="h-40 w-72 bg-cover bg-center " src="https://pasopati.id/uploads/artikel/1595583080_5f1aaa681ba1c.jpeg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.footer')
@endsection
