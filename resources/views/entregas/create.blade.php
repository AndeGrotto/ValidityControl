@extends('adminlte::page')

@section('content')
    <h3>Nova Entrega</h3>
    {!! Form::open(['url'=>'entregas/store']) !!}

    <div class="form-group">
        {!! Form::label('dataSaida', 'Data de Saída') !!}
        {!! Form::date('dataSaida', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataEntrega', 'Data de Entrega:') !!}
        {!! Form::date('dataEntrega', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop