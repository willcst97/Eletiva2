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
            return $resultado;
        } else {
            $resultado = $num1 + $num2;
            return $resultado;
        }
        return view('lista.ex1', compact('resultado'));
    }
}
