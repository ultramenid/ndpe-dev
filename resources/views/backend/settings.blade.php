@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')
    <main class="h-screen ">
        <div class="max-w-6xl px-6 mx-auto ">
            <div class="sm:pt-8 pt-4 ">
                <div class="grid grid-cols-12 ">
                    <ul class=" sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3 sm:col-span-2 col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                        @include('partials.sidebarSettings')
                    </ul>
                    <div class="sm:col-span-10 col-span-12 space-y-1">
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded">
                            <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Theme preferences </h1>
                            <p class="px-6 mb-6 text-sm font-light text-newbg-newgray-900 dark:text-gray-300">
                                Choose how Dashboard looks to you. Light theme , Dark theme , or sync with your system and automatically.
                            </p>
                            <div class="px-6 py-6 grid grid-cols-1 lg:grid-cols-3 gap-y-6 ">
                                <div class="text-center">
                                    <button onclick="toSystemMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('assets/system.png')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class="text-sm font-light dark:text-gray-300 text-newbg-newgray-900">System Theme</p>
                                </div>
                                <div class="text-center">
                                    <button onclick="toDarkMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('assets/dark_preview.svg')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class="text-sm font-light dark:text-gray-300 text-newbg-newgray-900">Dark Theme</p>
                                </div>
                                <div class="text-center">
                                    <button onclick="toLightMode()" class="relative border-gray-200 dark:border-opacity-20 border rounded">
                                        <img src="{{asset('assets/light_preview.svg')}}" alt="" class=" rounded w-full md:w-53">
                                    </button>
                                    <p class=" text-sm font-light dark:text-gray-300 text-newbg-newgray-900">Light Theme</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
