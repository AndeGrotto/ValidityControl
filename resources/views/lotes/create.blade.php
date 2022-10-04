@extends('adminlte::page')

@section('content')
    <h3>Novo Lote</h3>
    {!! Form::open(['url'=>'lotes/store']) !!}

    <div class="form-group">
        {!! Form::label('quantidadeProduto', 'Quantidade de Produtos:') !!}
        {!! Form::number('quantidadeProduto', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataFabricacao', 'Data de Fabricação:') !!}
        {!! Form::date('dataFabricacao', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop