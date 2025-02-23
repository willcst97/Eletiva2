@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 06: Calcular o perímetro de um retângulo.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex6"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="altura" class="form-label">Digite a altura do retângulo:</label>
            <input type="float" id="altura" name="altura" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="largura" class="form-label">Digite a altura do retângulo:</label>
            <input type="float" id="largura" name="largura" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($peri)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    O perímetro do retângulo é {{number_format($peri, 2, ',')}}.
</div>
@endisset

@endsection