@extends('layout.app')
@section('title', $blog->title)

@section('content')
    @include('partials.header')
    <h2>{{$blog->title}}</h2>
    <p>
        {{ $blog->description }}

    </p>

    <p> {{ $blog->full_text }} </p>
    <form METHOD="POST" action="{{route("comment", $blog->id)}}">
        @csrf
        <textarea name="text" placeholder="Ваш комментарий..." spellcheck="false"></textarea>
        @error('text')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">Написать </button>
    </form>

        <div id="task-comments">
            @foreach($blog->comments as $comment)
                <h3>{{ $comment->user->name }}</h3>
                <p>{{ $comment->text }}</p>
            @endforeach
        </div>


@endsection


