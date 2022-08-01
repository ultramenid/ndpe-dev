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
                <div class="flex justify-between sm:space-x-6 space-x-0 ">
                    <div class="prose  text-brown-ndpe py-4 max-w-3xl sm:w-5/12 w-full" >
                        {!! $benchmark->benchmark !!}
                    </div>
                    <div class="sm:w-7/12 w-full">
                        <h1 class="text-white text-xl">{{__('Recommendation To:')}}</h1>
                        <div class="flex   flex-col justify-between" x-data="{ recs : 'corporate' }">
                            <div class="w-full flex text-gray-200 mt-4 space-x-4 border-b border-white   z-20  items-center">
                                <div :class="(recs === 'corporate') ? 'font-extrabold cursor-pointer uppercase text-brown-ndpe px-2 py-2 bg-gray-50 text-ndpe' : 'font-light cursor-pointer uppercase text-brown-ndpe' " >
                                    <a  @click=" recs = 'corporate' ">{{__('PRODUCERS')}}</a>
                                </div>
                                <div :class="(recs === 'brands') ? 'font-extrabold cursor-pointer uppercase text-brown-ndpe px-2 py-2 bg-gray-50 text-ndpe' : 'font-light cursor-pointer uppercase text-brown-ndpe' ">
                                    <a  @click=" recs = 'brands'" >{{__('BUYERS & INVESTORS')}}</a>
                                </div>
                                <div :class="(recs === 'individual') ? 'font-extrabold cursor-pointer uppercase text-brown-ndpe px-2 py-2 bg-gray-50 text-ndpe' : 'font-light cursor-pointer uppercase text-brown-ndpe' ">
                                    <a : @click=" recs = 'individual' "  >{{__('INDIVIDUAL CONSUMERS')}}</a>
                                </div>
                            </div>
                            <div class=" w-full">
                                <div x-show="recs === 'corporate'" class="min-h-screen prose prose-ol:text-brown-ndpe prose-ndpe max-w-none text-brown-ndpe">
                                    {!! $benchmark->producer !!}
                                </div>
                                <div x-show=" recs === 'brands' " x-cloak style="display: none !important" class="min-h-screen prose max-w-none text-brown-ndpe">
                                    {!! $benchmark->buyerinvestor !!}
                                </div>
                                <div x-show=" recs ==='individual'" x-cloak style="display: none !important" class="min-h-screen prose max-w-none text-brown-ndpe">
                                    {!! $benchmark->individual !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
