@extends('adminlte::page')

@section('content')
    <h3>Novo Pedido</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'pedidos.store']) !!}

    <div class="form-group">
        {!! Form::label('dataPedido', 'Data do Pedido:') !!}
        {!! Form::date('dataPedido', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        {!! Form::select('cliente_id', 
                        \App\Models\Cliente::orderBy('razaoSocial')->pluck('razaoSocial', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}            
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('pedidos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop