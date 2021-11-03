@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:pages-about-component />
    </div>
@endsection
