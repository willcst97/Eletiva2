@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-3">Exercício 02: Retorno dos valores em ordem crescente.</h2>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex2"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="valor1" class="form-label">Digite o primeiro valor:</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="valor2" class="form-label">Digite o segundo valor:</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
<div class="mt-3 alert alert-success" role="alert">
    {{$resultado}}.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection