@extends('modelo')
@section('conteudo')

<div class="container">

<div class="row" style="margin-top:10px">
<div class="col-sm-11">
<h1>Lista de Produtos Cadastrados</h1>
</div>
<div class="col-sm-1">
<a href="{{ route('produtos.create') }}" class="btn btn-info" role="button">Novo</a>
</div>
</div>

@if (session('status'))
<div class="alert alert-succes">
    {{ session('status')}}
</div>
@endif



<table class="table table-hover">
<thead>
<tr>
<th>Descrição</th>
<th>Marca</th>
<th>Quantidade</th>
<th>Preço</th>
<th>Ações</th>
</tr>
</thead>
<tbody>
@foreach($produtos as $p)
<tr>
<td>{{$p->nome}}</td>
<td>{{$p->marca}}</td>
<td>{{$p->quant}}</td>
<td>{{number_format($p->preco, 2, '.', '.')}}</td>
<td>
<a href="{{ route('produtos.show', $p->id) }}" class="btn btn-success btn-sm" role="button">Ver</a>
<a href="{{ route('produtos.edit', $p->id) }}" class="btn btn-warning btn-sm" role="button">Alterar</a>
<form action=" {{ROUTE('produtos.destroy', $p->id)}}" method="POST" style="display: inline-block;"
 onsubmit="return confirm('Confirmar exclusão?')">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm"> Excluir </button>
    </form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection()
