<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @yield('links')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
        <nav class="orange darken-4">
            <div class="nav-wrapper container">
                <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo-bco.png" class="logo" alt=""></a>
                <a href="#" data-target="movil" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Blog</a></li>
                    @auth
                    <li><a href="">Administración</a></li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
