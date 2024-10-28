<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/hidroneumaticos', function () {
    return view('hidroneumaticos');
});

Route::get('/contraincendios', function () {
    return view('contraincendios');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
});
