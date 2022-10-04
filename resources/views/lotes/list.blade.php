@extends('adminlte::page')

@section('content')
<h1>Lotes</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Quantidade de Produto</th>
        <th>Data de Fabricação</th>
    </thead>
    <tbody>
        @foreach($lotes as $lote)
            <tr>
                <td>{{ $lote->id }}</td>
                <td>{{ $lote->quantidadeProduto }}</td>
                <td>{{ $lote->dataFabricacao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/lotes/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
@stop

