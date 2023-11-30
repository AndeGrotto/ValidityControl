@extends('adminlte::page')

@section('content')
    <h3>Editando Caminhão: {{ $caminhao->placa }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['caminhoes.update', 'id' => $caminhao->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('placa', 'Placa:') !!}
        {!! Form::text('placa', $caminhao->placa, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('caminhoes', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
