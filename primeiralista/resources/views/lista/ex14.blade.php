@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 14: Calcular taxa de juros composta.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex14"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class='row'>
        <div class="col mb-3">
            <label for="preco1" class="form-label">Digite o montante:</label>
            <input type="float" id="preco1" name="preco1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="taxa" class="form-label">Digite a taxa de juros:</label>
            <input type="float" id="taxa" name="taxa" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="tempo" class="form-label">Digite o período:</label>
            <input type="float" id="tempo" name="tempo" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($preco2)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    Montante final: R$ {{number_format($preco2,2,',','.')}}.
</div>
@endisset

@endsection