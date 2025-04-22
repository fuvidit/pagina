<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () { return view('welcome'); });

Route::get('/prensa', function () {
    return view('prensa');
})->name('prensa');

Route::get('/form', function () {
    return view('form');
})->name('form-login');

Route::post('/login', [AuthController::class, 'login'])->name('login');




// Route::get('/', function () { return view('form'); })-> namespace ('formulario');

