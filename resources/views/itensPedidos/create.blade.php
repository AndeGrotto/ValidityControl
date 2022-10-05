@extends('adminlte::page')

@section('content')
    <h3>Novo Item do Pedido</h3>
    {!! Form::open(['url'=>'itensPedidos/store']) !!}

    <div class="form-group">
        {!! Form::label('quantidadeItem', 'Quantidade do Item') !!}
        {!! Form::number('quantidadeItem', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('valorTotal', 'Valor Total:') !!}
        {!! Form::number('valorTotal', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop