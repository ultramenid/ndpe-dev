@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-ndpe-profile py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6">
            {{-- <h1 class="sm:text-4xl text-2xl text-brown-ndpe font-bold font-notoserif  sm:mt-24  mt-12 mb-12">FORESTRY & AGRIBUSINESS GROUPS WE MONITOR</h1> --}}
            <div class="prose  text-brown-ndpe sm:mt-24  mt-12 text-left max-w-3xl">
                {!! $groups->textGroup !!}
            </div>
        </div>
        <div class="max-w-6xl mx-auto relative px-6">
        <h1 class="sm:text-4xl text-2xl text-brown-ndpe font-bold font-notoserif  mt-12">Groups</h1>
            <div class="grid grid-flow-row sm:grid-cols-2 grid-cols-1 grid-rows-3 gap-10 mt-12">
                @foreach ($corporates as $item)
                <div  class="text-brown-ndpe col-span-1">
                    <div class="bg-border-ndpe h-2"></div>
                    <div class="bg-green-ndpe px-6 py-4 grid grid-rows-1 gap-4 h-full">
                        <img src="{{ asset('/storage/files/photos/'.$item->img) }}" alt="{{$item->name}}" class="w-24 py-4">
                        <a href="@php if(strlen($item->overview) < 128){ echo '#'; }else{ echo route('corporatedetail', [app()->getLocale(), $item->id, $item->corporateSLUG]) ; } @endphp"  class="hover:underline"><h2 class="text-5xl font-notoserif mb-3">{{$item->name}}</h2></a>
                        <p class="text-xs mb-6 leading-relaxed">{{$item->description}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
