@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 07: Calcular o perímetro de um círculo.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex7"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="raio" class="form-label">Digite o raio do círculo:</label>
        <input type="float" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($peri)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    O perímetro do círculo é {{number_format($peri, 2, ',')}}.
</div>
@endisset

@endsection