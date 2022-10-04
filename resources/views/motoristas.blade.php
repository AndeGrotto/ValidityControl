@extends('adminlte::page')

@section('content')
<h1>Motoristas</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
    </thead>
    <tbody>
        @foreach($motoristas as $motorista)
            <tr>
                <td>{{ $motorista->id }}</td>
                <td>{{ $motorista->nome }}</td>
                <td>{{ $motorista->telefone }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>

