@extends('adminlte::page')

@section('content')
    <h3>Novo Motorista</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'motoristas.store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('caminhao_id', 'Caminhao:') !!}
        {!! Form::select('caminhao_id', 
                        \App\Models\Caminhao::orderBy('placa')->pluck('placa', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}            
    </div>

    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('motoristas', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop