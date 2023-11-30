@extends('adminlte::page')

@section('content')
    <h3>Novo Item do Pedido</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'itensPedidos.store']) !!}
    <div class="form-group">
        {!! Form::label('produto_id', '*Produto:') !!}
        {!! Form::select('produto_id', 
                        \App\Models\Produto::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}            
    </div>
    <div class="form-group">
        {!! Form::label('pedido_id', '*Pedido:') !!}
        {!! Form::select('pedido_id', 
                        \App\Models\Pedido::orderBy('dataPedido')->pluck('dataPedido', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}            
    </div>
    <div class="form-group">
        {!! Form::label('quantidadeItem', 'Quantidade:') !!}
        {!! Form::number('quantidadeItem', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('valorTotal', 'Valor Total:') !!}
        {!! Form::number('valorTotal', null, ['class'=>'form-control', 'required', 'step'=>'any']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('itensPedidos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>


    {!! Form::close() !!}
@stop