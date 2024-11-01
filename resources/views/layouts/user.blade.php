<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NewsHub - Актуальные новости со всего мира">

    <!-- Подключение CSS библиотек -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Дополнительные стили -->
    <link rel="stylesheet" href="{{asset('user-styles/style.css')}}">
</head>

<body>

<!-- Шапка сайта -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">NewsHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('poster.index')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Политика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Бизнес</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Технологии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Главный баннер -->
<section class="main-banner">
    <div class="container">
        <h1>Последние новости со всего мира</h1>
        <p>Будьте в курсе актуальных событий</p>
    </div>
</section>

<!-- Основной контент -->
@yield('content')

<footer class="bg-dark text-white mt-5">
    <div class="container text-center py-3">
        <p>&copy; 2024 NewsHub. Все права защищены.</p>
        <p><a href="#" class="text-white">Политика конфиденциальности</a> | <a href="#" class="text-white">Условия
                использования</a></p>
    </div>
</footer>


<!-- Подключение JavaScript библиотек -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6Bluzks1dI/kp3l+2q6Ek7pOclv9k6ix1EbgB/l5Hy7J"
        crossorigin="anonymous"></script>
</body>
</html>
