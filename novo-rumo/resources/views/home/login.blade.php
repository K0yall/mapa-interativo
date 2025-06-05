@extends('layout.app')

@section('head')
    <!-- Importa o CSS específico para a página de login -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-container">
    <h2>Entrar</h2>

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required>
        </div>

        <button type="submit" class="btn-login">Entrar</button>
    </form>

    <div class="or-separator">ou</div>

    <a href="{{ route('social.google.redirect') }}" class="btn-google">
        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="google-icon" />
        Entrar com Google
    </a>

    <div class="register-link">
        <p>Não tem uma conta? <a href="{{ route('register') }}">Criar conta</a></p>
    </div>
</div>
@endsection
