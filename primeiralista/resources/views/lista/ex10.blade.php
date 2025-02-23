@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 10: Converter quilômetro em milha.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex10"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="km" class="form-label">Digite o valor em quilômetro:</label>
        <input type="float" id="km" name="km" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Converter</button>
</form>

@isset($km,$mi)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    {{number_format($km,2,',','.')}}km = {{number_format($mi,2,',','.')}}mi.
</div>
@endisset

@endsection