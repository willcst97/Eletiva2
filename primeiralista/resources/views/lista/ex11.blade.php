@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Calcular IMC.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex11"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class='row'>
        <div class="col mb-3">
            <label for="altura" class="form-label">Digite a sua altura em metro:</label>
            <input type="float" id="altura" name="altura" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="peso" class="form-label">Digite o seu peso em kg:</label>
            <input type="float" id="peso" name="peso" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($imc)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    Seu IMC = {{number_format($imc,2,',','.')}}.
</div>
@endisset

@endsection