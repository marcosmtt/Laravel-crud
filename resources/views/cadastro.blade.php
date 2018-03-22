@extends('modelo')

@section('conteudo')

<form action="recebeDados" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection