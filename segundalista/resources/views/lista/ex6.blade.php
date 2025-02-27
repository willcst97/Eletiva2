@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-1">Exercício 06: Completando valores.</h2>
<p class="mb-3">Retorno será todos os inteiros de 1 até o número infromado.</p>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex6"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="numero" class="form-label">Digite o número:</label>
            <input type="float" id="numero" name="numero" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($retorno)
<div class="mt-3 alert alert-success" role="alert">
    {{$retorno}}
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection