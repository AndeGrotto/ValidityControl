@extends('adminlte::page')

@section('content')
<h1>Pedidos</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Data do Pedido</th>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->dataPedido }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>
