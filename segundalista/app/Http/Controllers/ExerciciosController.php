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
            $resultado = (3 * ($num1 + $num2));
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
            $resultado = "Valores em ordem crescente: " . implode(' ', $valores);
        }
        return view('lista.ex2', compact('resultado'));
    }

    public function abrirFormEx3(){
        return view('lista.ex3');
    }
    public function respostaEx3(Request $request){
        $preco1 = floatval($request->input('preco1'));
        if ($preco1 >= 100) {
            $preco2 = $preco1 - ($preco1 * 0.15);
            $retorno = "R$ " . number_format($preco1, 2, ',', '.') . " - 15% = R$ " . number_format($preco2, 2, ',', '.');
        } else {
            $retorno = "Valor menor que R$ 100";
        }
        return view('lista.ex3', compact('retorno'));
    }

    public function abrirFormEx4(){
        return view('lista.ex4');
    }
    public function respostaEx4(Request $request){
        $valor = intval($request->input('valor'));
        $primos = [];
        for ($i = 2; $i <= $valor; $i++) {
            $ehPrimo = true;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j === 0) {
                    $ehPrimo = false;
                    break;
                }
            }
            if ($ehPrimo) {
                $primos[] = $i;
            }
        }
        $retorno = "";
        foreach ($primos as $primo) {
            $retorno .= $primo . ", ";
        }
        $retorno = rtrim($retorno, ", ");

        return view('lista.ex4', compact('retorno'));
    }

    public function abrirFormEx5(){
        return view('lista.ex5');
    }
    public function respostaEx5(Request $request){
        $valor = intval($request->input('valor'));
        $nomeDoMes = '';
        if ($valor < 1 || $valor > 12) {
            $nomeDoMes = "Permitido apenas valores de 1 a 12.";
        } else {
            switch ($valor) {
                case 1:
                    $nomeDoMes = "$valor = Janeiro";
                    break;
                case 2:
                    $nomeDoMes = "$valor = Fevereiro";
                    break;
                case 3:
                    $nomeDoMes = "$valor = Março";
                    break;
                case 4:
                    $nomeDoMes = "$valor = Abril";
                    break;
                case 5:
                    $nomeDoMes = "$valor = Maio";
                    break;
                case 6:
                    $nomeDoMes = "$valor = Junho";
                    break;
                case 7:
                    $nomeDoMes = "$valor = Julho";
                    break;
                case 8:
                    $nomeDoMes = "$valor = Agosto";
                    break;
                case 9:
                    $nomeDoMes = "$valor = Setembro";
                    break;
                case 10:
                    $nomeDoMes = "$valor = Outubro";
                    break;
                case 11:
                    $nomeDoMes = "$valor = Novembro";
                    break;
                case 12:
                    $nomeDoMes = "$valor = Dezembro";
                    break;
                default:
                    $nomeDoMes = 'Valor inválido';
            }
        }
        return view('lista.ex5', compact('nomeDoMes'));
    }

    public function abrirFormEx6(){
        return view('lista.ex6');
    } 
    public function respostaEx6(Request $request){
        $numero = intval($request->input('numero'));
        $retorno = '';
        for ($i = 1; $i <= $numero; $i++) {
            $retorno .= $i . ' ';
        }
        return view('lista.ex6', compact('retorno'));
    }

    public function abrirFormEx7(){
        return view('lista.ex7');
    }
    public function respostaEx7(Request $request){
        $numero = intval($request->input('numero'));
        $soma = 0;
        $i = 1;
        while ($i <= $numero) {
            $soma += $i;
            $i++;
        } 
        return view('lista.ex7', compact('numero','soma'));
    }

    public function abrirFormEx8(){
        return view('lista.ex8');
    }
    public function respostaEx8(Request $request){
        $numero = intval($request->input('valor'));
        $resultado = '';
        do {
            $resultado .= $numero . ' ';
            $numero--;
        } while ($numero >= 1);
        return view('lista.ex8', compact('resultado'));
    }
}
