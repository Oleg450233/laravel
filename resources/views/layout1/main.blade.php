<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<header class="container">
    <span class="logo">itProger </span>
    <nav>
        <a href="/">Главная</a>
        <a href="/about-us">Про нас</a>
        <a href="/shop-add" >Все статьи </a>
        <a href="/shop-add" >Coздать статью </a>
        <a href="/login.php" class="btn">Войти</a>

    </nav>
</header>

<main class ='container'>
    @include('blocks.messages')
    @yield('content')
</main>
<footer>Все права защищены</footer>

</body>
</html>
