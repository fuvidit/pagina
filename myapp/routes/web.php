<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');

