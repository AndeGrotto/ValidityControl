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
    </tbody>
</table>
<a href="{{ url('/entregas/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
@stop
