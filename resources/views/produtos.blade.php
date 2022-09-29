@extends('adminlte::page')

@section('content')
<h1>Produtos</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Descrição</th>
        <th>Validade</th>
        <th>Preço</th>
        <th>Tipo de Bebida</th>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->validade }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->tipoBebida }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>