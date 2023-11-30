@extends('adminlte::page')

@section('content')
    <h3>Novo Cliente</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'clientes.store']) !!}

    <div class="form-group">
        {!! Form::label('razaoSocial', 'Razão Social:') !!}
        {!! Form::text('razaoSocial', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cpf_cnpj', 'CPF/CNPJ:') !!}
        {!! Form::text('cpf_cnpj', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('situacao', 'Situação:') !!}
        {!! Form::select('situacao', 
                         array('Ativo' => 'Ativo(a)',
                         'Pendente' => 'Pendente',
                         'Cancelado' => 'Cancelado(a)'),
                        'Ativo', ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataCadastro', 'Data de Cadastro:') !!}
        {!! Form::date('dataCadastro', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-danger']) !!}
        <a href="{{ route('caminhoes', []) }}" class="btn btn-secondary">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop