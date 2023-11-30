@extends('adminlte::page')

@section('content')
    <h3>Novo Usuário</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'users.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::text('password', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-danger']) !!}
        <a href="{{ route('users', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
