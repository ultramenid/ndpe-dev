@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')


    <livewire:edit-corporate-component :idcorporates=$id />

@endsection
