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

Route::get('/ex4', [ExerciciosController::class, 'abrirFormEx4']);
Route::post('/listaex4', [ExerciciosController::class, 'respostaEx4']);

Route::get('/ex5', [ExerciciosController::class, 'abrirFormEx5']);
Route::post('/listaex5', [ExerciciosController::class, 'respostaEx5']);

Route::get('/ex6', [ExerciciosController::class, 'abrirFormEx6']);
Route::post('/listaex6', [ExerciciosController::class, 'respostaEx6']);

Route::get('/ex7', [ExerciciosController::class, 'abrirFormEx7']);
Route::post('/listaex7', [ExerciciosController::class, 'respostaEx7']);

Route::get('/ex8', [ExerciciosController::class, 'abrirFormEx8']);
Route::post('/listaex8', [ExerciciosController::class, 'respostaEx8']);

Route::get('/ex9', [ExerciciosController::class, 'abrirFormEx9']);
Route::post('/listaex9', [ExerciciosController::class, 'respostaEx9']);
