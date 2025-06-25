<?php

use App\Http\Controllers\AvaliarCidadeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConsultaCidadesController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Outras páginas
Route::get('/', function () {
    return view('home.menu');
});

Route::get('/Cidades', [ConsultaCidadesController::class, 'Consultar'])->name('cidades.listar');
Route::get('Cidades/avaliar/{id}', [AvaliarCidadeController::class, 'index'])->name('avaliar.form');
Route::post('Cidades/avaliar/{id}', [AvaliarCidadeController::class, 'registrarAvaliacao'])->name('avaliar.registrar');

// Login tradicional
Route::get('/Login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/Login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/Logout', [LoginController::class, 'logout'])->name('logout');

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Login social Google usando LoginController
Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('social.google.redirect');
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('social.google.callback');
