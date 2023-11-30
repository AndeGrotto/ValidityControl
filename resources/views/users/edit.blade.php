@extends('adminlte::page')

@section('content')
    <h3>Editando Usuário: {{ $user->nome }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["users.update", 'id' => $user->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email', $user->email, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::text('password', $user->password, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('users', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
