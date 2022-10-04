@extends('adminlte::page')

@section('content')
<h1>Itens Pedidos</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Quantidade de Itens</th>
        <th>Valor Total</th>
    </thead>
    <tbody>
        @foreach($itensPedidos as $itensPedido)
            <tr>
                <td>{{ $itensPedido->id }}</td>
                <td>{{ $itensPedido->quantidadeItem }}</td>
                <td>{{ $itensPedido->valorTotal }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>
