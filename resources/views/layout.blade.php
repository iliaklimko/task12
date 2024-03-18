<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy love story</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/love.png') }}">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
</head>

<body>

<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('/img/love-you.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">
                    <ul>
                        <li @if(Route::is('index')) class="active" @endif><a href="/">Главная</a></li>
                        <li @if(Route::is('gallery')) class="active" @endif><a href="/gallery">Галерея</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@if(!Route::is('index'))
    <section class="breadcrumb-section bread-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="/">Главная</a>
                        <span>Галерея</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Галерея</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@yield('main_content')

<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="footer-option">
                    <div class="fo-logo">
                        <a href="#">
                            <img src="{{ asset('/img/love-you.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget fw-links">
                    <h5>Навигация</h5>
                    <ul>
                        <li><a href="#about-us">О нас</a></li>
                        <li><a href="#idols">Кумиры</a></li>
                        <li><a href="#our-photos">Галерея</a></li>
                        <li><a href="#goals">Цели</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/mixitup.min.js') }}"></script>
<script src="{{ asset('/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
