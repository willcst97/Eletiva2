@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-3">Exercício 05: Mês referente ao valor digitado.</h2>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex5"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="valor" class="form-label">Digite o valor:</label>
            <input type="float" id="valor" name="valor" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($nomeDoMes)
<div class="mt-3 alert alert-success" role="alert">
    {{$nomeDoMes}}.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection