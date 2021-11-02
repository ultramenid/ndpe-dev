@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-update-ndpe py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4 sm:mt-12 sm-6">
                @foreach ($internals as $item)
                    <div class="col-span-1 flex flex-col ">
                        <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}"><img loading="lazy" src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{ $item->title }}" class="cursor-pointer h-52 w-96 bg-cover bg-center " >

                        <p class="text-2xl  text-gray-200 font-notoserif cursor-pointer hover:underline pt-2">{{$item->title}}</p>
                        <div class="flex flex-wrap mt-auto pt-3">
                            <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}" class="font-bold text-gray-200 cursor-pointer">Read More</a>
                        </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="bg-ndpe-profile min-h-screen">
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            @foreach ($anotherUpdate as $item)
            <div class="mt-4">
                <a class="text-gray-300 text-sm">{{ \Carbon\Carbon::parse($item->publishdate)->format('F, Y')}}</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">{{$item->title}}</a>
                        <p class="text-sm mt-4 text-gray-300">{{$item->description}}</p>

                        <div class="flex mt-4 space-x-2 items-center">
                            <a href="{{$item->sourceurl}}"  class="cursor-pointer text-gray-300 hover:underline text-sm">{{$item->sourcename}}</a>
                            <div class="border-r border-green-ndpe-2 h-6"></div>
                            <div class="flex justify-between space-x-2 text-sm">
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
