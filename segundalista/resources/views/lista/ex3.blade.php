@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-3">Exercício 03: Desconto de 15% sobre valor maior que R$ 100.</h2>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex3"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="preco1" class="form-label">Digite o valor:</label>
            <input type="float" id="preco1" name="preco1" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($retorno)
<div class="mt-3 alert alert-success" role="alert">
    {{$retorno}}.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection