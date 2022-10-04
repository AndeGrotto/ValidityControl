@extends('adminlte::page')

@section('content')
    <h3>Novo Endereço</h3>
    {!! Form::open(['url'=>'enderecos/store']) !!}

    <div class="form-group">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estado', 'Estado:') !!}
        {!! Form::text('estado', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::text('cep', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('rua', 'Rua:') !!}
        {!! Form::text('rua', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero', 'Número:') !!}
        {!! Form::integer('numero', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop