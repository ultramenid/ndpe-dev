<div class="max-w-6xl mx-auto relative z-10 sm:block hidden px-6" >
    <div class="flex justify-between text-brown-ndpe items-center">
        <div class="flex space-x-6">
            <a class=" @if ($nav == 'about') underline @endif " href="{{ route('about', app()->getlocale() )}}">{{__('About')}}</a>
            <a class=" @if ($nav == 'benchmark') underline @endif " href="{{ route('benchmark', app()->getlocale() )}}">{{__('Benchmark')}}</a>
            <a class=" @if ($nav == 'update') underline @endif " href="{{ route('update', app()->getlocale() )}}">{{__('Updates')}}</a>
        </div>
        <div class="text-3xl cursor-pointer">
            <a href="{{ route('index', app()->getlocale() )}}" class="font-bold">NDPE </a>
             <a href="{{ route('index', app()->getlocale() )}}" > Transparency</a>

        </div>
        <div class="flex space-x-6">
            <a class="@if ($nav == 'groups') underline @endif " href="{{ route('groups', [app()->getLocale()]) }}">{{__('Groups')}}</a>
            <a class=" @if ($nav == 'performance') underline @endif " href="#">{{__('Performance')}}</a>

        </div>
    </div>
</div>
