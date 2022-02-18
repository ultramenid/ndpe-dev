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
            <livewire:list-tag-component :tag=$tag />

        </div>
    </div>
    @include('partials.footer')
@endsection
