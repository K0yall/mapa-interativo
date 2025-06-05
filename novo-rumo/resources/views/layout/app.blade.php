<!DOCTYPE html>
<html lang="{{ str_replace('_',"-", app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cidades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caracteristicas.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header class="mac-navbar">
        <div class="mac-container">
            <!-- Ícone no canto esquerdo -->
            <div class="mac-icon">
                <img src="{{ asset('../img/logo1.png') }}" alt="Ícone" />
            </div>
            <!-- Menu centralizado -->
            <nav class="mac-menu">
                <ul>
                    <li><a href="{{ url('Home') }}">Início</a></li>
                    <li><a href="{{ url('Cidades') }}">Cidades</a></li>
                    <li><a href="#Comparar">Comparar</a></li>
                    <li><a href="../../view/map/map.html">Mapa</a></li>
                    <li><a href="../../view/historia/altovale.html">O Alto Vale do Itajaí</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#mapa">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main-conteudo">
        @yield('content')
    </main>
    <script src="js/script.js"></script>
    <script src="js/carregar_caracteristicas.js"></script>
</body>
</html>