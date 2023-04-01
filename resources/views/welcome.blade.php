@extends('layout.app')
@section('title', 'Главная страница')

@section('content')
    @include('partials.header')
    @foreach($blogs as $blog)
        @include('blogs.partials.item', ["blog" => $blog])
    @endforeach
@endsection
