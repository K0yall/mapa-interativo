@extends('layout.app')

@section('title', 'Descubra o Vale')

@section('content')
    <div class="intro-message">
        <h1>Descubra o Alto Vale do Itajaí</h1>
        <p>Explore as cidades, compare dados e encontre o seu lugar ideal.</p>
    </div>

    <div class="background-slideshow">
        <img src="{{ asset('img/rsl/riodosul2.jpg') }}" alt="Imagem 2">
        <img src="{{ asset('img/rsl/riodosul9.jpg') }}" alt="Imagem 9">
        <img src="{{ asset('img/rsl/riodosul1.jpg') }}" alt="Imagem 1">
        <img src="{{ asset('img/rsl/riodosul6.jpg') }}" alt="Imagem 6">
        <img src="{{ asset('img/rsl/riodosul3.jpg') }}" alt="Imagem 3">
        <img src="{{ asset('img/rsl/riodosul8.jpg') }}" alt="Imagem 8">
        <img src="{{ asset('img/rsl/riodosul5.jpg') }}" alt="Imagem 5">
        <img src="{{ asset('img/rsl/riodosul7.jpg') }}" alt="Imagem 7">
        <img src="{{ asset('img/rsl/riodosul4.jpg') }}" alt="Imagem 4">
    </div>

    <footer class="site-footer">
        <div class="footer-content">
            <p>Feito com ajuda das fotos por:</p>
            <img src="{{ asset('img/rsl/nordik.png') }}" alt="Logo do amigo" class="footer-logo" />
            <span>Nordik Films</span>
        </div>
    </footer>
@endsection
