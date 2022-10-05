@extends('adminlte::page')

@section('content')
    <h3>Novo Caminhão</h3>
    {!! Form::open(['url'=>'caminhoes/store']) !!}

    <div class="form-group">
        {!! Form::label('placa', 'Placa:') !!}
        {!! Form::text('placa', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop