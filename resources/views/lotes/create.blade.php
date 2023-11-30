@extends('adminlte::page')

@section('content')
    <h3>Novo Lote</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'lotes.store']) !!}

    <div class="form-group">
        {!! Form::label('quantidadeProduto', 'Quantidade de Produtos:') !!}
        {!! Form::number('quantidadeProduto', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataFabricacao', 'Data de Fabricação:') !!}
        {!! Form::date('dataFabricacao', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataValidade', 'Data de Validade:') !!}
        {!! Form::date('dataValidade', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('produto_id', 'Produto:') !!}
        {!! Form::select('produto_id', 
                        \App\Models\Produto::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required'])!!}   

    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('lotes', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop