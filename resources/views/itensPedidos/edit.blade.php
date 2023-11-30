@extends('adminlte::page')

@section('content')
    <h3>Editando Item do Pedido: {{ $itensPedido->quantidadeItem }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["itensPedidos.update", 'id'=>$itensPedido->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('quantidadeItem', 'Quantidade do Item') !!}
        {!! Form::number('quantidadeItem', $itensPedido->quantidadeItem, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('valorTotal', 'Valor Total:') !!}
        {!! Form::number('valorTotal', $itensPedido->valorTotal, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('itensPedidos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
