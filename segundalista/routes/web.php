<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;
use Illumunate\Controllers\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [ExerciciosController::class, 'abrirFormEx1']);
Route::post('/listaex1', [ExerciciosController::class, 'respostaEx1']);

Route::get('/ex2', [ExerciciosController::class, 'abrirFormEx2']);
Route::post('/listaex2', [ExerciciosController::class, 'respostaEx2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirFormEx3']);
Route::post('/listaex3', [ExerciciosController::class, 'respostaEx3']);
