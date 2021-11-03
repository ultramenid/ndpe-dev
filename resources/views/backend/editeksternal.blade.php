@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')


    <livewire:edit-eksternal-component :ideksternalnews=$id />

@endsection
