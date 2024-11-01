<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});

Route::get('/galeria', function () {
    return view('photo-gallery.parties');
});

// Ruta para ver todas las fotos
Route::get('/todas-las-fotos', function () {
    return view('todas-las-fotos');
});
