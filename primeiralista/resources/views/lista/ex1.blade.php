@extends('layout') <!-- layout básico parar todos os exercícios -->

@section('conteudo')

<!-- abaixo o código do formulário gerado pela aplicação da professora -->
<form method="post" action="/listaex1"> <!-- sempre adicionar esse action para o laravel definindo a rota-->

    @csrf <!-- sempre usar para garantir a segurança no formulário -->

    <div class="mb-3">
        <label for="nota1" class="form-label">Digite a primeira nota:</label>
        <input type="number" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Digite a segunda nota:</label>
        <input type="number" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Digite a terceira nota:</label>
        <input type="number" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($media)
        A média é {{$media}} <!-- retorno do resultado da conta -->
    @endisset

@endsection