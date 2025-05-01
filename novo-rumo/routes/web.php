<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home.menu');
});

Route::get('/Cidades', function () {
    return view('home.consultaCidades');
});
