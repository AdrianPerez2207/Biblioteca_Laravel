<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//-------Libros------
Route::get('/v1/libros', [\App\Http\Controllers\LibroController::class, 'api_index']);
Route::get('/v1/libros/{isbn}', [\App\Http\Controllers\LibroController::class, 'api_show']);

//-------Autores------
Route::get('/v1/autores', [\App\Http\Controllers\AutorController::class, 'api_index']);
Route::get('/v1/autores/{id}', [\App\Http\Controllers\AutorController::class, 'api_show']);

//-------Delete------
Route::delete('/v1/libros/{isbn}', [\App\Http\Controllers\LibroController::class, 'api_destroy']);

//-------POST------
Route::post('/v1/libros', [\App\Http\Controllers\LibroController::class, 'api_insert']);

