<?php

use Illuminate\Support\Facades\Route;

// RUTA PRINCIPAL
Route::get('/', function () { 
    return view('welcome'); 
});

// OTRAS VISTAS
Route::get('/prensa', function () {
    return view('prensa');
})->name('prensa');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/form', function () {
    return view('form');
})->name('form');




// Route::get('/', function () { return view('form'); })-> namespace ('formulario');

