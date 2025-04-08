<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/prensa', function () {
    return view('prensa');
})->name('prensa');

Route::get('/form', function () {
    return view('form');
})->name('form');




// Route::get('/', function () { return view('form'); })-> namespace ('formulario');

