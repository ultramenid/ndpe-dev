@extends('layouts.indexLayout')

@section('content')

    {{-- header --}}
    @include('partials.header')
    @include('partials.hero')

    {{-- content --}}
    <div class="bg-brown-ndpe py-12">
        <div class="max-w-6xl mx-auto  px-6">
            <h1 class="font-notoserif text-ndpe text-4xl sm:px-0 px-4">Corporation</h1>
            <div class="sm:w-6/12  w-full text-ndpe mt-6">
                <p class="sm:px-0 px-4">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
            </div>

            <div x-data="{swiper: null, prev: false}"
                x-init="swiper = new Swiper($refs.container, {
                    loop: false,
                    slidesPerView: 1,
                    spaceBetween: 0,

                    navigation: {
                        nextEl: $refs.next,
                        prevEl: $refs.pref,
                      },
                    breakpoints: {
                        640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                        },
                        768: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                        },
                        1024: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                        },
                    },
                    })"
                class="relative  mx-auto flex flex-row mt-8 mb-12"
                >
                <div class="absolute inset-y-0 left-0 z-10 flex items-center ">
                    <button @click="swiper.slidePrev()" x-ref="pref"
                    style="background-color: #277a28;"     class="-ml-2 opacity-70 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="swiper-container" x-ref="container">
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div x-ref="slider" class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Djarum</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Korindo</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Musim Mas</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Wilmar</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">RGE</h2></a>
                                <p class="text-xs mb-6">Royal Golden Eagle AboutVolo est, tet volup tament aliqui dentin re plitis pa quaspictem quossit, andiat.Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Salim</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="{{ url('/profile') }}" class="hover:underline"><h2 class="text-4xl font-notoserif mb-3">Sinarmas</h2></a>
                                <p class="text-xs mb-6">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat.
                                    Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.
                                </p>
                                <div class="flex flex-col space-y-2">
                                    <a href="#" class="font-semibold underline text-xs">Supply Chain Footprints & Key Issues</a>
                                    <a href="#" class="font-semibold underline text-xs">NGO Evaluation of NDPE Performance</a>
                                    <a href="#" class="font-semibold underline text-xs">Other Deforestation Risk Commodities</a>
                                    <a href="#" class="font-semibold underline text-xs">Buyers & Investors</a>
                                    <a href="#" class="font-semibold underline text-xs">References</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                    <button @click="swiper.slideNext()" x-ref="next"
                    style="background-color: #277a28;"   class="-mr-2 opacity-70 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>

            <div class="border-b-2 border-ndpe mb-6">
                <a class="text-ndpe font-bold">UPDATES</a>
            </div>

            <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4 sm:mt-12 sm-6">
                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595436986_5f186fba23a5a.gif" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center " >

                    <p class="text-2xl  text-ndpe font-notoserif cursor-pointer hover:underline pt-2">Analisis citra: Deforestasi dalam konsesi Djarum Grup di Kaltim</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-ndpe cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595501900_5f196d4c899ab.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center ">

                    <p class="text-2xl text-ndpe font-notoserif cursor-pointer hover:underline pt-2">Deforestasi di Muara Sungai Landak, konsesi terhubung APP</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-ndpe cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595585064_5f1ab228b5098.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center">

                    <p class="text-2xl text-ndpe font-notoserif cursor-pointer hover:underline pt-2">Kebijakan land-swap: Setengah hati lindungi gambut & hutan alam</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-ndpe cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    {{-- footer --}}
    @include('partials.footer')
@endsection
