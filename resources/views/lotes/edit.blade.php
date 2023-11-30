@extends('adminlte::page')

@section('content')
    <h3>Editando Lote: {{ $lote->quantidadeProduto }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['lotes.update', 'id' => $lote->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('quantidadeProduto', 'Quantidade de Produtos:') !!}
        {!! Form::number('quantidadeProduto', $lote->quantidadeProduto, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataFabricacao', 'Data de Fabricação:') !!}
        {!! Form::date('dataFabricacao', $lote->dataFabricacao, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataValidade', 'Data de Validade:') !!}
        {!! Form::date('dataValidade', $lote->dataValidade, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('produto_id', 'Produto:') !!}
        {!! Form::select('produto_id', 
                        \App\Models\Produto::orderBy('descricao')->pluck('descricao','id')->toArray(),
                        $lote->produto_id, ['class'=>'form-control', 'required'])!!}

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('lotes', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
