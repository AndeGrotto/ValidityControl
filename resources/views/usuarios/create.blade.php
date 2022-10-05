@extends('adminlte::page')

@section('content')
    <h3>Novo Usuário</h3>
    {!! Form::open(['url'=>'usuarios/store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('usuario', 'Usuário:') !!}
        {!! Form::text('usuario', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::text('password', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('palavraRecuperacao', 'Palavra de Recuperação:') !!}
        {!! Form::text('palavraRecuperacao', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@stop