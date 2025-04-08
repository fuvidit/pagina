<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/form', function () {
    return view('form');
})->name('form');


// Route::get('/', function () { return view('form'); })-> namespace ('formulario');

