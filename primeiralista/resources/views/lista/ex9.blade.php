@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 09: Converter metro em centímetro.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex9"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="metro" class="form-label">Digite o valor em metro:</label>
        <input type="float" id="metro" name="metro" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Converter</button>
</form>

@isset($metro,$cm)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    {{number_format($metro,2,',','.')}}m = {{number_format($cm,2,',','.')}}cm.
</div>
@endisset

@endsection