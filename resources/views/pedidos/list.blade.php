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
    </tbody>
</table>
<a href="{{ url('/pedidos/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
@stop