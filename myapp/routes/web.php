<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ObservatorioController;
use App\Http\Controllers\ChatbotController;

// RUTA PRINCIPAL
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// OTRAS VISTAS
Route::get('/prensa', [NewsController::class, 'index'])->name('prensa');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('/observatorio', [ObservatorioController::class, 'indicadores'])->name('observatorio');
Route::post('/chat', [ChatbotController::class, 'processMessage'])->name('mensaje.enviar');
