<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/delete/{autor}', [AutorController::class, 'destroy'])->name('autores.destroy');
Route::get('/autores/newAuthor', [AutorController::class, 'newAuthor'])->name('autores.newAuthor');

Route::get('/', [LibroController::class, 'index']) ->name('libros.index');
Route::get('/delete/{libro}', [LibroController::class, 'destroy']) ->name('libros.destroy');
Route::get('/newBook', [LibroController::class, 'newBook']) ->name('libros.newBook');

Route::get('/ubicaciones', [UbicacionController::class, 'index'])->name('ubicaciones.index');
Route::get('/ubicaciones/delete/{ubicacion}', [UbicacionController::class, 'destroy'])->name('ubicaciones.destroy');
Route::get('/ubicaciones/newLocation', [UbicacionController::class, 'newLocation'])->name('ubicaciones.newLocation');
