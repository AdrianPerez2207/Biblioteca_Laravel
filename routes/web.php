<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/delete/${autor}', [AutorController::class, 'destroy'])->name('autores.destroy');

Route::get('/', [LibroController::class, 'index']) ->name('libros.index');

Route::get('/ubicaciones', [UbicacionController::class, 'index'])->name('ubicaciones.index');
