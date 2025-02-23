@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 08: Calcular potência.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex8"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class='row'>
        <div class="col mb-3">
            <label for="base" class="form-label">Digite a base da potência:</label>
            <input type="float" id="base" name="base" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="expoente" class="form-label">Digite o expoente da potência:</label>
            <input type="float" id="expoente" name="expoente" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($pot)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    O resultado da potência é {{number_format($pot, 2, ',')}}.
</div>
@endisset

@endsection