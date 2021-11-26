@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-ndpe-profile py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6">
            <h1 class="sm:text-4xl text-2xl text-brown-ndpe font-bold font-notoserif  sm:mt-24  mt-12 mb-12">FORESTRY & AGRIBUSINESS GROUPS WE MONITOR</h1>
            <div class="prose max-w-none text-brown-ndpe ">
                {!! $groups->textGroup !!}
            </div>
        </div>
        <div class="max-w-6xl mx-auto relative px-6">
        <h1 class="sm:text-4xl text-2xl text-brown-ndpe font-bold font-notoserif  mt-12">Groups</h1>
            <div class="grid grid-flow-row sm:grid-cols-2 grid-cols-1 grid-rows-3 gap-10 mt-12">
                @foreach ($corporates as $item)
                <div  class="text-brown-ndpe col-span-1">
                    <div class="bg-border-ndpe h-2"></div>
                    <div class="bg-green-ndpe px-6 py-4">
                        <img src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{$item->name}}" class="w-24 py-4">
                        <a href="#"  class="hover:underline"><h2 class="text-5xl font-notoserif mb-3">{{$item->name}}</h2></a>
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
