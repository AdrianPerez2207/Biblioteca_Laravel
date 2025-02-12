<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/delete/{autor}', [AutorController::class, 'destroy'])->name('autores.destroy');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores', [AutorController::class, 'store'])->name('autores.store');

Route::get('/', [LibroController::class, 'index']) ->name('libros.index');
Route::get('/delete/{libro}', [LibroController::class, 'destroy']) ->name('libros.destroy');
Route::get('/create', [LibroController::class, 'create']) ->name('libros.create');
Route::get('/prestar/{libro}', [LibroController::class, 'prestar']) ->name('libros.prestar');
Route::post('/store', [LibroController::class, 'store']) ->name('libros.store');

Route::get('/ubicaciones', [UbicacionController::class, 'index'])->name('ubicaciones.index');
Route::get('/ubicaciones/delete/{ubicacion}', [UbicacionController::class, 'destroy'])->name('ubicaciones.destroy');
Route::get('/ubicaciones/create', [UbicacionController::class, 'create'])->name('ubicaciones.create');
