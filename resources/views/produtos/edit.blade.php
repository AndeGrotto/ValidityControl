@extends('adminlte::page')

@section('content')
    <h3>Editando Produto: {{ $produto->descricao }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['produtos.update', 'id' => $produto->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('estoque', 'Estoque:') !!}
        {!! Form::number('estoque', $produto->estoque, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', $produto->descricao, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('validade', 'Validade:') !!}
        {!! Form::number('validade', $produto->validade, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::number('preco', $produto->preco, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tipoBebida', 'Tipo de Bebida:') !!}
        {!! Form::select(
            'tipoBebida',
            ['Refrigerante' => 'Refrigerante', 'Água' => 'Água', 'Suco' => 'Suco'],
            $produto->tipoBebida,
            [
                'class' => 'form-control',
                'required',
            ],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('produtos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
