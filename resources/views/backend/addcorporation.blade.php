@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')


    <livewire:add-corporation-component />

@endsection
