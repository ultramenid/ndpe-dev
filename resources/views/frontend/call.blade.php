@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <section class="relative">
        <div class="min-h-screen bg-update-ndpe py-6" style="
        background-image: url({{ asset('assets/new-bg.jpg') }});
        background-repeat: no-repat;
        background-size: cover;
        background-color: transparent;
        background-blend-mode:multiply;">
            @include('partials.nav')
            <div class="max-w-6xl mx-auto  px-6 py-6">
                <h1 class="font-notoserif text-6xl text-gray-200 mt-20">{{__('Benchmark')}}</h1>
                <div class="prose max-w-none text-gray-300 py-4" >
                    {!! $benchmark->benchmark !!}
                </div>

                <h1 class="font-notoserif sm:text-5xl text-4xl text-gray-200 mt-16">{{__('Recommendation')}}</h1>
                <div class="flex sm:flex-row  flex-col justify-between" x-data="{ recs : 'corporate' }">
                    <div class="sm:w-5/12 w-full flex flex-col space-y-4 text-gray-200 mt-12  z-20 ">
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'corporate' }" @click=" recs = 'corporate' " class=" font-light cursor-pointer uppercase">FOR PRODUCERS</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'brands' }" @click=" recs = 'brands'"   class=" font-light cursor-pointer uppercase">FOR BUYERS & INVESTORS</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'individual' }" @click=" recs = 'individual' "  class="font-light cursor-pointer uppercase">FOR INDIVIDUAL CONSUMERS</a>
                        </div>
                    </div>
                    <div class="sm:w-7/12 w-full mt-10">
                        <div x-show="recs === 'corporate'" class="min-h-screen prose max-w-none text-gray-300">
                            {!! $benchmark->producer !!}
                        </div>
                        <div x-show=" recs === 'brands' " x-cloak style="display: none !important" class="min-h-screen prose max-w-none text-gray-300">
                            {!! $benchmark->buyerinvestor !!}
                        </div>
                        <div x-show=" recs ==='individual'" x-cloak style="display: none !important" class="min-h-screen prose max-w-none text-gray-300">
                            {!! $benchmark->individual !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    @include('partials.footer')
@endsection
