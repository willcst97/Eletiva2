@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 03: Converter grau Fahrenheit em grau Celsius.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex3"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="grau" class="form-label">Digite a temperatura em °F:</label>
        <input type="float" id="grau" name="grau" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Converter</button>
</form>

@isset($grau,$grauconv)
<div class="mt-3 alert alert-success" role="alert">
    {{$grau}}°F ={{number_format($grauconv, 2, ',')}}°C.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection