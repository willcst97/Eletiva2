<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormEx1(){
        return view('lista.ex1');
    }
    public function respostaEx1(Request $request){
        $nota1 = floatval($request->input('nota1'));
        $nota2 = floatval($request->input('nota2'));
        $nota3 = floatval($request->input('nota3'));
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return view('lista.ex1', compact('media'));
    }
}
