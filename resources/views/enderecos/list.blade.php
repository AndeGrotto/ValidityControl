@extends('adminlte::page')

@section('content')
<h1>Endereços</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Cep</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Número</th>
    </thead>
    <tbody>
        @foreach($enderecos as $endereco)
            <tr>
                <td>{{ $endereco->id }}</td>
                <td>{{ $endereco->cidade }}</td>
                <td>{{ $endereco->estado }}</td>
                <td>{{ $endereco->cep }}</td>
                <td>{{ $endereco->bairro }}</td>
                <td>{{ $endereco->rua }}</td>
                <td>{{ $endereco->numero }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/enderecos/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
@stop