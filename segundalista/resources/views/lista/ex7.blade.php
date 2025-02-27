@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-3">Exercício 07: Soma de todos os números anteriores ao informado.</h2>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex7"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="numero" class="form-label">Digite o número:</label>
            <input type="float" id="numero" name="numero" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($numero,$soma)
<div class="mt-3 alert alert-success" role="alert">
    Soma de 1 até {{$numero}} = {{number_format($soma,0,',','.')}}
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection