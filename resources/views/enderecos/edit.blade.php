@extends('adminlte::page')

@section('content')
    <h3>Editando Endereço: {{ $endereco->cidade }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => ['enderecos.update', 'id' => $endereco->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::number('cep', $endereco->cep, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('logradouro', 'Logradouro:') !!}
        {!! Form::text('logradouro', $endereco->logradouro, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero', 'Número:') !!}
        {!! Form::number('numero', $endereco->numero, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', $endereco->bairro, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', $endereco->cidade, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estado', 'Estado:') !!}
        {!! Form::text('estado', $endereco->estado, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('enderecos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
