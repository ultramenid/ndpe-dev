@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaArticle')
@endsection

@section('content')
@include('partials.headerDetail')
    <div class="h-min-screen bg-article-ndpe py-6">
        @include('partials.navArticle')
        <style>
        </style>
        <div class="max-w-6xl mx-auto relative px-6 sm:mt-28 mt-6">
            <h1 class="sm:text-5xl text-4xl text-ndpe text-center  font-notoserif">{{$article->title}}</h1>
            <h1 class="sm:text-2xl text-1xl text-ndpe text-center  font-notoserif mt-6 opacity-60">{{$article->description}}</h1>


            <img class="text-center mt-12" src="{{ asset('/storage/'.$article->img) }}" alt="{{$article->title}}">

            <div class="max-w-3xl mx-auto relative mt-12">
                <div class="flex flex-row justify-between space-x-20">
                    <div class="font-light prose max-w-none leading-relaxed">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>

            <div class="max-w-4xl mx-auto relative mt-12">
                <div class="border-b-2 border-ndpe mb-6">
                    <a class="text-ndpe text-2xl font-bold">EXPLORE MORE</a>
                </div>

                <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4">
                    @foreach ($relatedinternal as $item)
                        <div class="col-span-1 flex flex-col">
                            <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}"><img loading="lazy" src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{ $item->title }}"  class="cursor-pointer ">

                            <p class="text-2xl  text-ndpe font-notoserif cursor-pointer hover:underline">{{$item->title}}</p>
                            <div class="flex flex-wrap mt-auto pt-3">
                                <a href="{{ route('article', [app()->getLocale(), $item->id, $item->slug]) }}" class="font-bold" style="color: #277a28">Explore More</a>
                            </div>
                            </a>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
