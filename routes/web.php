<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola-mundo', function () {
    return view('hola');
});

Route::get('contacto', [ContactoController::class, 'contacto']);
Route::post('recibe-formulario', [ContactoController::class, 'recibeFormulario']);
