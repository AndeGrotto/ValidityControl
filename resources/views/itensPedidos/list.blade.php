@extends('layouts.default')

@section('content')
    <h1>Itens Pedidos</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Produto</th>
            <th>Pedido</th>
            <th>Quantidade de Itens</th>
            <th>Valor Total</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($itensPedidos as $itensPedido)
                <tr>
                    <td>{{ $itensPedido->id }}</td>
                    <td>{{ isset($itensPedido->produto->descricao) ? $itensPedido->produto->descricao : "Produto não informado" }}</td>
                    <td>{{ isset($itensPedido->pedido->dataPedido) ? $itensPedido->pedido->dataPedido : "Pedido não informado" }}</td>
                    <td>{{ $itensPedido->quantidadeItem }}</td>
                    <td>R$ {{ $itensPedido->valorTotal }}</td>
                    <td>
                        <a href="{{ route('itensPedidos.edit', ['id' => $itensPedido->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $itensPedido->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $itensPedidos->links('pagination::bootstrap-4') }}

    <a href="{{ route('itensPedidos.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"itensPedidos"
@endsection
