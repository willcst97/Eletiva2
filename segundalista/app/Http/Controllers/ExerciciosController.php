<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormEx1(){
        return view('lista.ex1');
    }
    public function respostaEx1(Request $request){
        $num1 = floatval($request->input('num1'));
        $num2 = floatval($request->input('num2'));
        if ($num1 === $num2) {
            $resultado = (3*($num1+$num2));
        } else {
            $resultado = $num1 + $num2;
        }
        return view('lista.ex1', compact('resultado'));
    }

    public function abrirFormEx2(){
        return view('lista.ex2');
    }
    
    public function respostaEx2(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
    
        if ($valor1 === $valor2) {
            $resultado = "Números iguais: $valor1";
        } else {
            $valores = [$valor1, $valor2];
            sort($valores);
            $resultado = "Valores em ordem crescente: ".implode(' ', $valores);
        }
    
        return view('lista.ex2', compact('resultado'));
    }
}
