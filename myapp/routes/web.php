<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// RUTA PARA EL CHATBOT (recibe mensaje y responde JSON)
Route::post('/chatbot', function (Request $request) {
    $message = strtolower($request->input('message'));

    // Respuestas básicas
    $responses = [
        'hola' => '¡Hola! ¿Cómo puedo ayudarte?',
        'adios' => '¡Hasta pronto!',
        'gracias' => 'De nada, para eso estoy 😉',
    ];

    // Si el mensaje está en las respuestas, lo responde, sino mensaje por defecto
    $reply = $responses[$message] ?? 'Lo siento, no entendí tu mensaje.';

    // Retorna respuesta JSON
    return response()->json(['reply' => $reply]);
})->name('chatbot');





// Route::get('/', function () { return view('form'); })-> namespace ('formulario');

