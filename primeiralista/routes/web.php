<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    return "Seja bem vindo!";
});

Route::get('/exer1', function () {
    return view('exer1');
});

Route::post('/exer1resp', function (Request $request) {
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1', function () {
    return view('lista.ex1'); //retornará o arquivo ex1 na pasta lista dentro da pasta view do projeto
});

Route::post('/listaex1', function (Request $request) { //sempre que for usar post tem que usar o objeto request dentro de function
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});

Route::get('ex2', function(){
    return view('/lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $grau = floatval($request->input('grau'));
    $grauconv = ($grau * 9/5) + 32;
    return view('lista.ex2', compact('grauconv','grau'));
});

Route::get('ex3', function(){
    return view('/lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $grau = floatval($request->input('grau'));
    $grauconv = ($grau - 32) * (5/9);
    return view('lista.ex3', compact('grau','grauconv'));
});
