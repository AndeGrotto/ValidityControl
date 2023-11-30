@extends('adminlte::page')

@section('content')
    <h3>Novo Produto</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'produtos.store']) !!}

    <div class="form-group">
        {!! Form::label('estoque', 'Estoque:') !!}
        {!! Form::number('estoque', 0, ['class' => 'form-control', 'readonly']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('validade', 'Validade:') !!}
        {!! Form::number('validade', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::number('preco', null, ['class' => 'form-control', 'required', 'step'=>'any']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tipoBebida', 'Tipo de Bebida:') !!}
        {!! Form::select('tipoBebida', ['Refrigerante' => 'Refrigerante', 'Água' => 'Água', 'Suco' => 'Suco'], null, [
            'class' => 'form-control',
            'required',
        ]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-danger']) !!}
        <a href="{{ route('produtos', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
