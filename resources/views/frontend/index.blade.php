@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection


@section('content')

    {{-- header --}}
    @include('partials.header')
    @include('partials.hero')

    {{-- content --}}
    <div class="bg-brown-ndpe py-12">
        <div class="max-w-6xl mx-auto  px-6">
            <h1 class="font-notoserif text-ndpe text-4xl sm:px-0 px-4">{{__('Groups')}}</h1>
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
                    @foreach ($corporates as $item)
                        <div x-ref="slider" class="swiper-slide p-4 text-white">
                            <div class="bg-border-ndpe h-2"></div>
                            <div class="bg-green-ndpe px-6 py-4">
                                <a href="#"  class="hover:underline"><h2 class="text-3xl font-notoserif mb-3">{{$item->name}}</h2></a>
                                <p class="text-xs mb-6 leading-relaxed">{{$item->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
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
                @foreach ($updates as $item)
                    <div class="col-span-1 flex flex-col ">
                        <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}"><img loading="lazy" loading="lazy" src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{ $item->title }}"  alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center " >

                        <p class="text-2xl  text-ndpe font-notoserif cursor-pointer hover:underline pt-2">{{$item->title}}</p>
                        <div class="flex flex-wrap mt-auto pt-3">
                            <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}" class="font-bold text-ndpe cursor-pointer">Read More</a>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    {{-- footer --}}
    @include('partials.footer')
@endsection
