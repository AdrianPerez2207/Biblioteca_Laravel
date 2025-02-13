<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/autores/delete/{autor}', [AutorController::class, 'destroy'])->name('autores.destroy');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores', [AutorController::class, 'store'])->name('autores.store');
Route::post('/autores/search', [AutorController::class, 'search'])->name('autores.search');
Route::post('/autores/update/{autor}', [AutorController::class, 'update'])->name('autores.update');
Route::get('/autores/edit/{autor}', [AutorController::class, 'edit'])->name('autores.edit');

Route::get('/', [LibroController::class, 'index']) ->name('libros.index');
Route::get('/reporte', [LibroController::class, 'reporte']) ->name('libros.reporte');
Route::get('/delete/{libro}', [LibroController::class, 'destroy']) ->name('libros.destroy');
Route::get('/create', [LibroController::class, 'create']) ->name('libros.create');
Route::get('/prestar/{libro}', [LibroController::class, 'prestar']) ->name('libros.prestar');
Route::post('/store', [LibroController::class, 'store']) ->name('libros.store');
Route::post('/search', [LibroController::class, 'search']) ->name('libros.search');
Route::get('/edit/{libro}', [LibroController::class, 'edit']) ->name('libros.edit');
Route::post('/update/{libro}', [LibroController::class, 'update']) ->name('libros.update');
Route::post('/reportSearch', [LibroController::class, 'reportSearch']) ->name('libros.reportSearch');

Route::get('/ubicaciones', [UbicacionController::class, 'index'])->name('ubicaciones.index');
Route::get('/ubicaciones/delete/{ubicacion}', [UbicacionController::class, 'destroy'])->name('ubicaciones.destroy');
Route::get('/ubicaciones/create', [UbicacionController::class, 'create'])->name('ubicaciones.create');
Route::post('/ubicaciones', [UbicacionController::class, 'store'])->name('ubicaciones.store');
Route::get('/ubicaciones/search/{ubicacion}', [UbicacionController::class, 'search'])->name('ubicaciones.search');
