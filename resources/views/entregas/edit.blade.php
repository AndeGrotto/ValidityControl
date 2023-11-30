@extends('adminlte::page')

@section('content')
    <h3>Editando Entrega: {{ $entrega->dataSaida }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => ['entregas.update', 'id' => $entrega->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('dataSaida', 'Data de Saída') !!}
        {!! Form::date('dataSaida', $entrega->dataSaida, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataEntrega', 'Data de Entrega:') !!}
        {!! Form::date('dataEntrega', $entrega->dataEntrega, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('motorista_id', 'Motorista:') !!}
        {!! Form::select('motorista_id', 
                        \App\Models\Motorista::orderBy('nome')->pluck('nome','id')->toArray(),
                        $entrega->motorista_id, ['class'=>'form-control', 'required'])!!}

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('entregas', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
