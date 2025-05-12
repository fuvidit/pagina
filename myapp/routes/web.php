<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ObservatorioController;
use App\Http\Controllers\ChatController;

// RUTA PRINCIPAL
Route::get('/',[NewsController::class, 'inicio'])->name('inicio');

// OTRAS VISTAS
Route::get('/prensa', [NewsController::class, 'index'])->name('prensa');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('/observatorio', [ObservatorioController::class, 'indicadores'])->name('observatorio');
Route::post('/chat', [ChatController::class, 'handleMessage'])->name('chat');
Route::get('/test-chat', function() {
    return response()->json(['message' => 'Test successful']);
});

// RUTAS PARA NOTICIAS
Route::get('/noticias/crear', function() {
    return view('noticias.crear');
})->name('noticias.crear');
Route::post('/guardar-noticia', [NewsController::class, 'store'])->name('noticias.store');
Route::get('/noticia/{id}/editar', [NewsController::class, 'edit'])->name('noticias.editar');
Route::put('/noticia/{id}', [NewsController::class, 'update'])->name('noticias.update');
Route::delete('/noticia/{id}', [NewsController::class, 'destroy'])->name('noticias.destroy');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');