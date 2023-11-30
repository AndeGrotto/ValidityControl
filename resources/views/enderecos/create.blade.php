@extends('adminlte::page')

@section('content')
    <h3>Novo Endereço</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'enderecos.store']) !!}

    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::number('cep', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('logradouro', 'Logradouro:') !!}
        {!! Form::text('logradouro', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero', 'Número:') !!}
        {!! Form::number('numero', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estado', 'Estado:') !!}
        {!! Form::text('estado', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('enderecos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
    @stop