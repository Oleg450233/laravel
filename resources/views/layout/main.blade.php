<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header class="container">
    <span class="logo">Blog Spot</span>
    <nav>
        <a href="/">Главная</a>
        <a href="/about-us">Про нас</a>

        @guest
            <a href="/login">Войти</a>
            <a href="/register">Регистрация</a>
        @else
            <a href="/user">{{ Auth::user()->name }}</a>
            <a href="/article-add">Добавить статью</a>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Выйти</button>
            </form>
        @endguest
    </nav>
</header>
<main class="container">
    @include('blocks.messages')
    @yield('content')
</main>
<footer>Все права защищены</footer>
</body>
</html>
