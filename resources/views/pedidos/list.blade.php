@extends('layouts.default')

@section('content')

<h1>Pedidos</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'pedidos']) !!}
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
            <th>Data do Pedido</th>
            <th>Cliente*</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ Carbon\Carbon::parse($pedido->dataPedido)->format('d/m/Y') }}</td>
                    <td>{{ isset($pedido->cliente->razaoSocial) ? $pedido->cliente->razaoSocial : "Cliente não informado" }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', ['id' => $pedido->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $pedido->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pedidos->links('pagination::bootstrap-4') }}

    <a href="{{ route('pedidos.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"pedidos"
@endsection
