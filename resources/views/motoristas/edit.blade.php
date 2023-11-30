@extends('adminlte::page')

@section('content')
    <h3>Editando Motorista: {{ $motorista->nome }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["motoristas.update", 'id' => $motorista->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $motorista->nome, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', $motorista->telefone, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('caminhao_id', 'Caminhao:') !!}
        {!! Form::select('caminhao_id', 
                        \App\Models\Caminhao::orderBy('placa')->pluck('placa','id')->toArray(),
                        $motorista->caminhao_id, ['class'=>'form-control', 'required'])!!}

    <div class="form-group">
        {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        <a href="{{ route('motoristas', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop