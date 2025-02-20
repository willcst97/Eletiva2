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

Route::get('ex2', function () {
    return view('/lista.ex2');
});

Route::post('/listaex2', function (Request $request) {
    $grau = floatval($request->input('grau'));
    $grauconv = ($grau * 9 / 5) + 32;
    return view('lista.ex2', compact('grauconv', 'grau'));
});

Route::get('ex3', function () {
    return view('/lista.ex3');
});

Route::post('/listaex3', function (Request $request) {
    $grau = floatval($request->input('grau'));
    $grauconv = ($grau - 32) * (5 / 9);
    return view('lista.ex3', compact('grau', 'grauconv'));
});

Route::get('ex4', function () {
    return view('/lista.ex4');
});

Route::post('/listaex4', function (Request $request) {
    $alt = floatval($request->input('altura'));
    $larg = floatval($request->input('largura'));
    $area = $alt * $larg;
    return view('lista.ex4', compact('area'));
});

Route::get('ex5', function () {
    return view('/lista.ex5');
});

Route::post('/listaex5', function (Request $request) {
    $raio = floatval($request->input('raio'));
    $area = M_PI * ($raio * $raio);
    return view('lista.ex5', compact('area'));
});

Route::get('ex6', function () {
    return view('/lista.ex6');
});

Route::post('/listaex6', function (Request $request) {
    $alt = floatval($request->input('altura'));
    $larg = floatval($request->input('largura'));
    $peri = 2 * $alt + 2 * $larg;
    return view('lista.ex6', compact('peri'));
});

Route::get('ex7', function () {
    return view('/lista.ex7');
});

Route::post('/listaex7', function (Request $request) {
    $raio = floatval($request->input('raio'));
    $peri = 2 * M_PI * $raio;
    return view('lista.ex7', compact('peri'));
});

Route::get('ex8', function () {
    return view('/lista.ex8');
});

Route::post('/listaex8', function (Request $request) {
    $base = floatval($request->input('base'));
    $exp = floatval($request->input('expoente'));
    $pot = pow($base, $exp);
    return view('lista.ex8', compact('pot'));
});

Route::get('ex9', function () {
    return view('/lista.ex9');
});

Route::post('/listaex9', function (Request $request) {
    $metro = floatval($request->input('metro'));
    $cm = $metro * 100;
    return view('lista.ex9', compact('metro','cm'));
});

Route::get('ex10', function () {
    return view('/lista.ex10');
});

Route::post('/listaex10', function (Request $request) {
    $km = floatval($request->input('km'));
    $mi = $km * 0.621371;
    return view('lista.ex10', compact('km','mi'));
});
