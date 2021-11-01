@extends('layouts.backend')


@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')


    <livewire:edit-internal-component :idinternalnews=$id />

@endsection
