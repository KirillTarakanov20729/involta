<div>
    <a href="{{ route("blogs.show", $blog->id) }}">
        <h2>{{ $blog->title }}</h2>
</a>
</div>

<p>
    {{$blog->preview}}
</p>
