@extends('layouts.default')

@section('content')

<h1>Clientes</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'clientes']) !!}
    <div calss="sidebar-form">
        <div class="input-group">
            <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
{!! Form::close() !!}
<br>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Razão Social</th>
            <th>CPF/CNPJ</th>
            <th>Situação</th>
            <th>Telefone</th>
            <th>Data de Cadastro</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->razaoSocial }}</td>
                    <td>{{ $cliente->cpf_cnpj }}</td>
                    <td>{{ $cliente->situacao }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ Carbon\Carbon::parse($cliente->dataCadastro)->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $cliente->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $clientes->links('pagination::bootstrap-4') }}

    <a href="{{ route('clientes.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"clientes"
@endsection
