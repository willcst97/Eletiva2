@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-1">Exercício 01: Soma de números diferentes.</h2>
<p class="mb-3">Caso os dois números forem iguais, o retorno será o triplo da soma.</p>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex1"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="row">
        <div class="col mb-3">
            <label for="num1" class="form-label">Digite o primeiro número:</label>
            <input type="number" id="num1" name="num1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="num2" class="form-label">Digite o segundo número:</label>
            <input type="number" id="num2" name="num2" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($resultado)
<div class="mt-3 alert alert-success" role="alert">
    O resultado da operação é: {{$resultado}}.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection