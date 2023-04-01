@extends('layout.admin')

@section('title',  isset($blog) ? "Редактировать статью ID {$blog->id}" : 'Добавить статью')

@section('content')
        <h3>{{ isset($blog) ? "Редактировать статью ID {$blog->id}" : 'Добавить статью' }}</h3>
            <form enctype="multipart/form-data" method="POST" action="{{ isset($blog) ? route("admin.blogs.update", $blog->id) : route("admin.blogs.store") }}">
                @csrf

                @if(isset($blog))
                    @method('PUT')
                @endif

                <input name="title" type="text" @error('title') @enderror" placeholder="Название" value="{{ $blog->title ?? '' }}" />

                @error('title')
                <p>{{ $message }}</p>
                @enderror

                <input name="preview" type="text" @error('preview') @enderror" placeholder="Кратко" value="{{ $blog->preview ?? '' }}" />

                @error('preview')
                <p>{{ $message }}</p>
                @enderror

                <input name="description" type="text" @error('description') @enderror" placeholder="Описание" value="{{ $blog->description ?? '' }}" />

                @error('description')
                <p>{{ $message }}</p>
                @enderror

                <input name="full_text" type="text" @error('full_text') @enderror" placeholder="Текст" value="{{ $blog->full_text ?? '' }}" />

                @error('full_text')
                <p>{{ $message }}</p>
                @enderror

                <input name="slug" type="text" @error('slug') @enderror" placeholder="ID" value="{{ $blog->slug ?? '' }}" />

                @error('slug')
                <p>{{ $message }}</p>
                @enderror

                <button type="submit">Сохранить</button>
            </form>
@endsection
