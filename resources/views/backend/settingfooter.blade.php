@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')
    <main class="h-screen ">
        <livewire:toastr />
        <div class="max-w-6xl px-6 mx-auto ">
            <div class="sm:pt-8 pt-4 ">
                <div class="grid grid-cols-12 ">
                    <ul class=" sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3 sm:col-span-2 col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                        @include('partials.sidebarSettings')
                    </ul>
                    <div class="sm:col-span-10 col-span-12 space-y-1">
                        <livewire:cms-footer-component />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
