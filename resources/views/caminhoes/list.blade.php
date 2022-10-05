@extends('adminlte::page')

@section('content')
<h1>Caminhões</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Placa</th>
    </thead>
    <tbody>
        @foreach($caminhoes as $caminhao)
            <tr>
                <td>{{ $caminhao->id }}</td>
                <td>{{ $caminhao->placa }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/caminhoes/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button></a>
@stop
