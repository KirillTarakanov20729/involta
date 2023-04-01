<nav>
    <div>
        <a href="{{ route("home") }}">Блог с нуля</a><br>
    </div>
    <div>
        @auth("web")
            <a href="{{route("logout")}}">Выйти</a>
            <a href="{{route("blogs.index")}}">Перейти к полному списку блогов</a>
        @endauth

        @guest("web")
            <a href="{{ route("login") }}">Войти</a>
        @endguest


    </div>
    <a href="{{ route("info") }}">О разработчике</a><br>
    <a href="{{ route("admin.login") }}">Административная панель</a><br>

</nav>
