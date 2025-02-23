@extends('layout') <!-- layout básico para todas as páginas -->

@section('conteudo')

<h2 class="mb-3">Exercício 12: Calcular percentual de desconto.</h2>

<!-- abaixo o código do formulário -->
<form method="post" action="/listaex12"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class='row'>
        <div class="col mb-3">
            <label for="preco1" class="form-label">Digite o preço do produto:</label>
            <input type="float" id="preco1" name="preco1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="desconto" class="form-label">Digite o percentual de desconto:</label>
            <input type="float" id="desconto" name="desconto" class="form-control" required="">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($preco1,$preco2,$desc)
<!-- retorno do resultado da conta -->
<div class="mt-3 alert alert-success" role="alert">
    R$ {{number_format($preco1,2,',','.')}} - {{number_format($desc,2,',','.')}}% = R$ {{number_format($preco2,2,',','.')}}.
</div>
@endisset

@endsection