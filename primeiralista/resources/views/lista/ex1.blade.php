@extends('layout') <!-- layout básico para todos os exercícios -->

@section('conteudo')

<h2 class="mb-3">Exercício 01: Média de 3 notas.</h2>

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex1"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="nota1" class="form-label">Digite a primeira nota:</label>
        <input type="float" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Digite a segunda nota:</label>
        <input type="float" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Digite a terceira nota:</label>
        <input type="float" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($media)
<div class="mt-3 alert alert-success" role="alert">
    A média é das 3 notas é {{$media}}.
</div>
<!-- retorno do resultado da conta -->
@endisset

@endsection