@extends('adminlte::page')

@section('content')
    <h3>Buscar CEP</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'enderecos.search_cep']) !!}

    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::number('cep', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-danger']) !!}
        <a href="{{ route('enderecos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
