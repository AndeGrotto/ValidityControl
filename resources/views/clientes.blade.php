@extends('adminlte::page')

@section('content')
<h1>Clientes</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Razão Social</th>
        <th>CPF/CNPJ</th>
        <th>Situação</th>
        <th>Telefone</th>
        <th>Data de Cadastro</th>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->razaoSocial }}</td>
                <td>{{ $cliente->cpf_cnpj }}</td>
                <td>{{ $cliente->situacao }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->dataCadastro }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>
