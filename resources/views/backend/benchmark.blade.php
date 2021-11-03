@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <div>
        <livewire:pages-benchmark-component />
    </div>
@endsection
