@extends('adminlte::page')

@section('content')
    <h3>Editando Pedido: {{ $pedido->dataPedido }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['pedidos.update', 'id' => $pedido->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('dataPedido', 'Data do Pedido:') !!}
        {!! Form::date('dataPedido', $pedido->dataPedido, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        {!! Form::select('cliente_id', 
                        \App\Models\Cliente::orderBy('razaoSocial')->pluck('razaoSocial', 'id')->toArray(),
                        $pedido->cliente_id, ['class'=>'form-control', 'required'])!!}            
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('pedidos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
