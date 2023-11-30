@extends('adminlte::page')

@section('content')
    <h3>Editando Cliente: {{ $cliente->razaoSocial }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['clientes.update', 'id' => $cliente->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('razaoSocial', 'Razão Social:') !!}
        {!! Form::text('razaoSocial', $cliente->razaoSocial, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cpf_cnpj', 'CPF/CNPJ:') !!}
        {!! Form::text('cpf_cnpj', $cliente->cpf_cnpj, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('situacao', 'Situação:') !!}
        {!! Form::select('situacao', 
                         array('Ativo' => 'Ativo(a)',
                         'Pendente' => 'Pendente',
                         'Cancelado' => 'Cancelado(a)'),
                         $cliente->situacao, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', $cliente->telefone, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataCadastro', 'Data de Cadastro:') !!}
        {!! Form::date('dataCadastro', $cliente->dataCadastro, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('clientes', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
