@extends('modelo')
@section('conteudo')

<div class="container">

    <div class="row" style="margin-top:10px">
        <div class="col-sm-11">
            @if($acao == 1)
                <h2>Inclusão de Produtos</h2>
            @elseif ($acao == 2)
                <h2>Consulta de Produtos</h2>
            @else
                <h2>Alteração de Produtos</h2>
            @endif
        </div>

        <div class="col-sm-1">
        <a href="{{ route('produtos.index') }}" class="btn btn-info" role="button">Voltar</a>
        </div>
        </div>

        @if ($acao == 1)
        <form action="{{ route('produtos.store') }}" method="POST"></form>
        @elseif ($acao == 3)
        <form action="{{ route('produtos.update', $reg->id) }}" method="POST"></form>
        @endif
        
    <form action="{{ route('produtos.store')}}" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <label for="nome">Descrição:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $reg->nome or old('nome') }}">
    </div>

    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" id="marca" name="marca" value="{{ $reg->marca or old('marca') }}">
    </div>

    <div class="form-group">
        <label for="quant">Quantidade:</label>
        <input type="text" class="form-control" id="quant" name="quant" value="{{ $reg->quant or old('quant') }}">
    </div>

    <div class="form-group">
        <label for="preco">Preço R$:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{ $reg->marca or old('preco') }}">
    </div>

    @if($acao ==1 || $acao == 3)
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    @endif

</form>
</div>

@endsection