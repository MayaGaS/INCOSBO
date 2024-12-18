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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/aprobados', function () {
    return view('aprobados');
});

Route::get('/obras', function () {
    return view('obras');
});

Route::get('/mentenimientos', function () {
    return view('mantenimientos');
});

Route::get('/puestas', function () {
    return view('puestas');
});