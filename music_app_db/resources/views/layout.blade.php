<!DOCTYPE html>
<html>
<head>
    <title>Работа с данными</title>
</head>
<body>
    <h1>Песни и исполнители</h1>
    <nav>
        <a href="{{ route('authors.index') }}">Авторы</a>
        <a href="{{ route('songs.index') }}">Песни</a>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>