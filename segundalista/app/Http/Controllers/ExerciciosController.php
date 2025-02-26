<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormEx1()
    {
        return view('lista.ex1');
    }
    public function respostaEx1(Request $request)
    {
        $num1 = floatval($request->input('num1'));
        $num2 = floatval($request->input('num2'));
        if ($num1 === $num2) {
            $resultado = (3 * ($num1 + $num2));
        } else {
            $resultado = $num1 + $num2;
        }
        return view('lista.ex1', compact('resultado'));
    }

    public function abrirFormEx2()
    {
        return view('lista.ex2');
    }
    public function respostaEx2(Request $request)
    {
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
        if ($valor1 === $valor2) {
            $resultado = "Números iguais: $valor1";
        } else {
            $valores = [$valor1, $valor2];
            sort($valores);
            $resultado = "Valores em ordem crescente: " . implode(' ', $valores);
        }

        return view('lista.ex2', compact('resultado'));
    }

    public function abrirFormEx3()
    {
        return view('lista.ex3');
    }
    public function respostaEx3(Request $request)
    {
        $preco1 = floatval($request->input('preco1'));
        if ($preco1 >= 100) {
            $preco2 = $preco1 - ($preco1 * 0.15);
            $retorno = "R$ " . number_format($preco1, 2, ',', '.') . " - 15% = R$ " . number_format($preco2, 2, ',', '.');
        } else {
            $retorno = "Valor menor que R$ 100";
        }

        return view('lista.ex3', compact('retorno'));
    }

    public function abrirFormEx4()
    {
        return view('lista.ex4');
    }
    public function respostaEx4(Request $request)
    {
        $valor = intval($request->input('valor'));
        $primos = [];

        for ($i = 2; $i <= $valor; $i++) {
            $isPrimo = true;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j === 0) {
                    $isPrimo = false;
                    break;
                }
            }
            if ($isPrimo) {
                $primos[] = $i;
            }
        }

        $resultado = "";
        foreach ($primos as $primo) {
            $resultado .= $primo . ", ";
        }
        $resultado = rtrim($resultado, ", ");

        return view('primos.resultado', compact('resultado'));
    }
}
