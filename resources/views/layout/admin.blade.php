<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <title>@yield('title')</title>
</head>
<body>
            <nav>

                <a href="{{ route('admin.blogs.index') }}">

                    <span>Статьи</span>
                </a>
            </nav>

            <a href="{{ route("admin.logout") }}">Выйти</a>
            <main>
                @yield('content')
            </main>

</body>
</html>
