@extends('adminlte::page')

@section('content')
    <h3>Novo Pedido</h3>
    {!! Form::open(['url'=>'pedidos/store']) !!}

    <div class="form-group">
        {!! Form::label('dataPedido', 'Data do Pedido:') !!}
        {!! Form::date('dataPedido', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop