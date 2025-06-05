<!DOCTYPE html>
<html lang="{{ str_replace('_', "-", app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cidades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caracteristicas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header class="mac-navbar">
        <div class="mac-container">
            <div class="mac-icon">
                <img src="{{ asset('../img/logo1.png') }}" alt="Ícone" />
            </div>

            <ul class="mac-menu">
                <li><a href="{{ url('Home') }}" class="active">Início</a></li>
                <li><a href="{{ url('Cidades') }}">Cidades</a></li>
                <li><a href="#Comparar">Comparar</a></li>
                <li><a href="../../view/map/map.html">Mapa</a></li>
                <li><a href="../../view/historia/altovale.html">O Alto Vale do Itajaí</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="{{ url('/Login') }}">Login</a></li>
            </ul>
            <button class="theme-toggle" aria-label="Alternar modo claro/escuro">🌙</button>
        </div>
    </header>
    <main id="main-conteudo">
        @yield('content')
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
    <script src="js/Caractetisticas.js"></script>
</body>

</html>