@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.headerTags')
    <div class="h-min-screen bg-update-ndpe py-6">
        @include('partials.nav')
    </div>
    <div class="bg-ndpe-profile min-h-screen">
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class="border-b border-white sm:mt-6 mt-2  mb-4 py-6">
                <h1 class="text-6xl text-white text-center ">TAG: {{$tag}}</h1>
            </div>
            @foreach ($tags as $item)
            <div class="sm:mt-4 mt-0">
                <a class="text-gray-300 text-sm">{{ \Carbon\Carbon::parse($item->publishdate)->format('F, Y')}}</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="{{$item->sourceurl}}" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">{{$item->title}}</a>
                        <p class="text-sm mt-4 text-gray-300">{{$item->description}}</p>

                        <div class="flex mt-4 sm:flex-row flex-col sm:space-x-2 space-x-0 space-y-1 sm:space-y-0 sm:items-center">
                            <a href="{{$item->sourceurl}}"  class="cursor-pointer text-gray-300 hover:underline text-sm text-left">{{$item->sourcename}}</a>
                            <div class="border-r border-green-ndpe-2 h-6 sm:block hidden"></div>
                            <div class="flex flex-wrap  justify-between sm:space-x-2 space-x-0 space-y-1 sm:space-y-0 text-sm">
                                @php
                                $tags = (explode(",",$item->tags))
                            @endphp
                            @foreach ($tags as $tag)
                                <a href="{{ route('tags', [app()->getLocale(),  $tag]) }}"  class="cursor-pointer text-white px-2 py-2 underline bg-green-ndpe">{{$tag}}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{$item->title}}">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>
            @endforeach

        </div>
    </div>
    @include('partials.footer')
@endsection
