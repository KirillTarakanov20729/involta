@extends('layout.admin')

@section('title', 'Статьи')

@section('content')
        <h3>Статьи</h3>

            <a href="{{ route("admin.blogs.create") }}">Добавить</a>

                    <table>
                        <thead>
                        <tr>
                            <th>
                                Заголовок</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <div>{{ $blog->title }}</div>
                                </td>
                                <td>
                                    <a href="{{ route("admin.blogs.edit", $blog->id) }}">Редактировать</a>

                                    <form action="{{ route("admin.blogs.destroy", $blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
        {{ $blogs->links() }}
@endsection
