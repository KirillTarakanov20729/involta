@extends('layout.app')
@section('title', 'Блоги')

@section('content')
    @include('partials.header')
    <div class="container">

        @foreach($blogs as $blog)
            @include('blogs.partials.item', ["blog" => $blog])
        @endforeach

        {{ $blogs->links() }}
    </div>
@endsection
