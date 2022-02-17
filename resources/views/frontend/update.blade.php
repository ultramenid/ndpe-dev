@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-update-ndpe py-6 sm:block hidden">
        @include('partials.nav')
    </div>
    <div class="bg-ndpe-profile min-h-screen">
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class="border-b">
            <h1 class="text-center sm:text-5xl text-3xl  sm:py-24 py-12 text-brown-ndpe font-bold font-notoserif">NEWS & NDPE IMPLEMENTATION UPDATES</h1>

            </div>
            <livewire:list-update-component />
        </div>
    </div>
    @include('partials.footer')
@endsection
