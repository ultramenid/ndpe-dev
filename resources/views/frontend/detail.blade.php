@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaGroups')
@endsection

@section('content')
@include('partials.headerDetail')
    <div class="h-min-screen bg-ndpe-profile py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6 mt-12">
            <div class="flex sm:flex-row flex-col justify-between sm:space-x-16 sm:space-y-0 space-y-4 items-center">
                <div class="text-white sm:w-7/12 w-full">
                    <h1 class="text-6xl font-bold font-notoserif">{{ $detail->name }}</h1>
                    <p class="mt-6 text-xl font-light">{{ $detail->description }}</p>
                    <div class="border-b-2 border-white mt-6">
                        <a class="text-2xl font-bold">HIGHLIGHT</a>
                    </div>
                    <div class="flex sm:flex-row flex-col jusitify-between mt-8  sm:space-x-16 space-x-0 sm:space-y-0 space-y-4">
                        <div class="sm:w-6/12 w-full">
                            <h4 class="text-xl font-notoserif">Total Konsesi</h4>
                            <h2 class="text-4xl font-notoserif"><a class="text-4xl font-notoserif">{{$detail->nilai1}}</a> ha</h2>
                            <p class="text-sm mt-4 font-light">{{$detail->nilai1Desc}}</p>
                        </div>
                        <div class="sm:w-6/12 w-full">
                            <h4 class="text-xl font-notoserif">Total Hutan Alam</h4>
                            <h2 class="text-4xl font-notoserif"><a class="text-4xl font-notoserif">{{$detail->nilai2}}</a> ha</h2>
                            <p class="text-sm mt-4 font-light">{{$detail->nilai2Desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full">
                    <img src="{{ asset('/storage/files/photos/'.$detail->imgmap) }}" alt="">
                </div>
            </div>

            {{-- tabs lg --}}
            <div class="min-h-screen bg-brown-ndpe mt-20 sm:px-6 sm:py-4 px-0 py-0 "
            x-data="{tabs: 'overview'}"
            >
                <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 mb-6 gap-4 sm:px-0 sm:py-0 px-6 py-4" >
                    {{-- overview --}}
                    <button
                        :class="{ 'lg:no-underline underline' : tabs === 'overview' }"
                        @click=" tabs= 'overview'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Overview
                    </button>

                    {{-- Area --}}
                    <button
                        :class="{ 'lg:no-underline underline' : tabs === 'area' }"
                        @click=" tabs= 'area'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Area
                    </button>

                    {{-- Ownership --}}
                    <button
                        :class="{ 'lg:no-underline underline' : tabs === 'ownership' }"
                        @click=" tabs= 'ownership'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Ownership
                    </button>

                    {{-- Financial --}}
                    <button
                        :class="{ 'lg:no-underline underline' : tabs === 'financial' }"
                        @click=" tabs= 'financial'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Spotlight
                    </button>

                    {{-- Buyer --}}
                    <button
                        :class="{ 'lg:no-underline underline' : tabs === 'buyer' }"
                        @click=" tabs= 'buyer'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Buyer
                    </button>

                    {{-- NDPE Performance --}}
                    {{-- <button
                        :class="{ 'lg:no-underline underline' : tabs === 'performance' }"
                        @click=" tabs= 'performance'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        NDPE Performance
                    </button> --}}
                </div>

                <div class="lg:grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 -mb-1 -mt-4 gap-4  hidden" >
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'overview'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'area'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'ownership'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'financial'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'buyer'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                    {{-- <div class="grid justify-items-center">
                        <div x-show="tabs === 'performance'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div> --}}
                </div>
                <div class="min-h-screen bg-green-ndpe px-4 py-6 text-white">
                    <div x-show="tabs === 'overview'" x-cloak style="display: none !important" class=" prose   max-w-none text-brown-ndpe ">
                        {!! $detail->overview !!}
                    </div>
                    <div x-show="tabs === 'area'" x-cloak style="display: none !important" class="prose   max-w-none text-brown-ndpe">
                        {!! $detail->area !!}
                    </div>
                    <div x-show="tabs === 'ownership'" x-cloak style="display: none !important" class="prose   max-w-none text-brown-ndpe">
                        {!! $detail->ownership !!}
                    </div>
                    <div x-show="tabs === 'financial'" x-cloak style="display: none !important" class="prose   max-w-none text-brown-ndpe">
                        {!! $detail->financial !!}
                    </div>
                    <div x-show="tabs === 'buyer'" x-cloak style="display: none !important" class="prose   max-w-none text-brown-ndpe">
                        {!! $detail->buyer !!}
                    </div>
                    {{-- <div x-show="tabs === 'performance'" x-cloak style="display: none !important" class="prose   max-w-none text-brown-ndpe">
                        {!! $detail->performance !!}
                    </div> --}}
                </div>
            </div>




        </div>
    </div>

    @include('partials.footer')
@endsection
