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

            <div class="max-w-6xl mx-auto px-6  text-gray-300 z-20"
            x-data="{ tabs: 'theplatform' }"
            >
                <div class="flex sm:flex-row flex-col justify-between sm:space-x-12 space-x-0 sm:space-y-0 space-y-6 mt-12">
                    <div class="sm:w-5/12 w-full flex flex-col space-y-4">
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'theplatform' }" @click=" tabs = 'theplatform' " class="text-2xl font-light cursor-pointer text-brown-ndpe">{{__('BACKGROUND')}}</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'ownership' }" @click=" tabs = 'ownership'"   class="text-2xl font-light cursor-pointer text-brown-ndpe">{{__('GOAL')}}</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'editorial' }" @click=" tabs = 'editorial' "  class="text-2xl font-light cursor-pointer text-brown-ndpe">{{__('CONTENT')}}</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'content' }" @click=" tabs = 'content' "  class="text-2xl font-light cursor-pointer text-brown-ndpe">{{__('EDITORIAL')}}</a>
                        </div>
                    </div>
                    <div class="sm:w-7/12 w-full">
                        <div class="prose max-w-none text-brown-ndpe" x-show="tabs === 'theplatform' ">
                            {!!$about->theplatform!!}
                        </div>
                        <div x-show=" tabs === 'ownership'"  x-cloak style="display: none !important" class="prose max-w-none text-brown-ndpe">
                            {!!$about->ownership!!}
                        </div>
                        <div x-show="tabs === 'editorial' " x-cloak style="display: none !important" class="prose max-w-none text-brown-ndpe" >
                            {!!$about->editorial!!}
                        </div>
                        <div x-show="tabs === 'content' "  x-cloak style="display: none !important" class="prose max-w-none text-brown-ndpe" >
                            {!!$about->content!!}
                        </div>
                        <div x-show="tabs ==='timeline'" x-cloak style="display: none !important" class="prose max-w-none text-brown-ndpe">
                            {!!$about->timeline!!}
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    @include('partials.footer')

@endsection
