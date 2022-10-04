@extends('adminlte::page')

@section('content')
<h1>Entregas</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Data de Saída</th>
        <th>Data de Entrega</th>
    </thead>
    <tbody>
        @foreach($entregas as $entrega)
            <tr>
                <td>{{ $entrega->id }}</td>
                <td>{{ $entrega->dataSaida }}</td>
                <td>{{ $entrega->dataEntrega }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>
