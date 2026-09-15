<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ExpansionController;
use App\Http\Controllers\BuscarController;

// Ruta principal
Route::get('/', function () {
    return view('home');
});

// Rutas de los 3 módulos
Route::resource('idiomas', IdiomaController::class);
Route::resource('juegos', JuegoController::class);
Route::resource('expansiones', ExpansionController::class);

// Ruta para la Búsqueda Avanzada
Route::get('/buscar', [BuscarController::class, 'index'])->name('buscar');