@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 15: Converter dias em horas, minutos e segundos.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex15"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class='row'>
        <div class='col mb-3'>
            <label for="dias" class="form-label">Digite a quantidade de dias a ser convertida:</label>
            <input type="float" id="dias" name="dias" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Converter</button>
</form>

@isset($dias,$horas,$minutos,$segundos)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    {{number_format($dias,0,',','.')}} dias = {{number_format($horas,0,',','.')}} horas = {{number_format($minutos,0,',','.')}} minutos = {{number_format($segundos,0,',','.')}} segundos.
</div>
@endisset

@endsection