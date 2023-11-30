@extends('adminlte::page')

@section('content')
    <h3>Nova Entrega</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'entregas.store']) !!}

    <div class="form-group">
        {!! Form::label('dataSaida', 'Data de Saída') !!}
        {!! Form::date('dataSaida', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataEntrega', 'Data de Entrega:') !!}
        {!! Form::date('dataEntrega', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('motorista_id', 'Motorista:') !!}
        {!! Form::select('motorista_id', 
                        \App\Models\Motorista::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}

    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('entregas', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop