@extends('layouts.indexLayout')


@section('content')
@include('partials.header')
    <div class="h-min-screen bg-ndpe-profile py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6 mt-12">
            <div class="flex sm:flex-row flex-col justify-between sm:space-x-16 sm:space-y-0 space-y-4">
                <div class="text-white sm:w-6/12 w-full">
                    <h1 class="text-6xl font-bold font-notoserif">Djarum</h1>
                    <p class="mt-6 text-xl font-light">AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <div class="border-b-2 border-white mt-6">
                        <a class="text-2xl font-bold">ANGKA HIGHLIGHT</a>
                    </div>
                    <div class="flex sm:flex-row flex-col jusitify-between mt-8  sm:space-x-16 space-x-0 sm:space-y-0 space-y-4">
                        <div class="sm:w-6/12 w-full">
                            <h2 class="text-7xl font-notoserif">$<a class="text-7xl font-notoserif">10.4</a>m</h2>
                            <p class="text-2xl mt-4 font-light">AboutVolo est, tetvolu pta ment aliqui.</p>
                        </div>
                        <div class="sm:w-6/12 w-full">
                            <h2 class="text-7xl font-notoserif">$<a class="text-7xl font-notoserif">10.4</a>m</h2>
                            <p class="text-2xl mt-4 font-light">AboutVolo est, tetvolu pta ment aliqui.</p>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full">
                    <img src="{{ asset('assets/dummypeta.png') }}" alt="">
                </div>
            </div>

            <div class="min-h-screen bg-brown-ndpe mt-20 px-6 py-4"
            x-data="{tabs: 'overview'}"
            >
                <div class="grid lg:grid-cols-6 md:grid-cols-2 grid-cols-1 mb-6 gap-4" >
                    {{-- overview --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'overview' }"
                        @click=" tabs= 'overview'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Overview
                    </button>

                    {{-- Area --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'area' }"
                        @click=" tabs= 'area'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Area
                    </button>

                    {{-- Ownership --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'ownership' }"
                        @click=" tabs= 'ownership'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Ownership
                    </button>

                    {{-- Financial --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'financial' }"
                        @click=" tabs= 'financial'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Financial
                    </button>

                    {{-- Buyer --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'buyer' }"
                        @click=" tabs= 'buyer'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        Buyer
                    </button>

                    {{-- NDPE Performance --}}
                    <button
                        :class="{ 'sm:no-underline underline' : tabs === 'performance' }"
                        @click=" tabs= 'performance'"
                        class="border py-2 bg-green-ndpe text-white col-span-1 font-semibold hover:underline">
                        NDPE Performance
                    </button>
                </div>

                <div class="sm:grid lg:grid-cols-6 md:grid-cols-2 grid-cols-1 -mb-1 -mt-4 gap-4  hidden" >
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
                    <div class="grid justify-items-center">
                        <div x-show="tabs === 'performance'" x-cloak style="display: none !important" class="triangle-ndpe"></div>
                    </div>
                </div>
                <div class="min-h-screen bg-green-ndpe px-4 py-6 text-white">
                    <p x-show="tabs === 'overview'" x-cloak style="display: none !important">Overview AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <p x-show="tabs === 'area'" x-cloak style="display: none !important">Area AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <p x-show="tabs === 'ownership'" x-cloak style="display: none !important">Ownership AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <p x-show="tabs === 'financial'" x-cloak style="display: none !important">Financial AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <p x-show="tabs === 'buyer'" x-cloak style="display: none !important">Buyer AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                    <p x-show="tabs === 'performance'" x-cloak style="display: none !important">performance AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                </div>
            </div>


        </div>
    </div>

    @include('partials.footer')
@endsection
