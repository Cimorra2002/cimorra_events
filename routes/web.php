<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});

Route::get('/galeria', function () {
    return view('photo-gallery.parties');
});
