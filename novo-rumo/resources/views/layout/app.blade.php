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
    <link rel="stylesheet" href="{{ asset('css/avaliarCidade-styles.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    
    <!-- CSS do Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!--CSS necessario do leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <title>@yield('title')</title>

    @stack('styles')
</head>

<body>
    <header class="mac-navbar">
        <div class="mac-container">
            <div class="mac-icon">
                <img src="{{ asset('../img/logo1.png') }}" alt="Ícone" />
            </div>

            <ul class="mac-menu">
                <li><a href="{{ url('/') }}" class="active">Início</a></li>
                <li><a href="{{ url('Cidades') }}">Cidades</a></li>
                <!-- <li><a href="#Comparar">Comparar</a></li> -->
                <li><a href="{{ url('mapa') }}">Mapa</a></li>
                <!-- <li><a href="../../view/historia/altovale.html">O Alto Vale do Itajaí</a></li> -->
                <!-- <li><a href="#contato">Contato</a></li> -->
                <li><a href="{{ url('/Login') }}">Login</a></li>
            </ul>
            <button class="theme-toggle" aria-label="Alternar modo claro/escuro">🌙</button>
        </div>
    </header>
    <main id="main-conteudo">
        @yield('content')
    </main>
    @stack('scripts')
    
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
    <script src="js/carregar_caracteristicas.js"></script>
    <script src="{{ asset('js/mapa.js') }}"></script>
</body>

</html>