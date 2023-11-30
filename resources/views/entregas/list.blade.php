@extends('layouts.default')

@section('content')

<h1>Entregas</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'entregas']) !!}
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
            <th>Data de Saída</th>
            <th>Data de Entrega</th>
            <th>Motorista*</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($entregas as $entrega)
                <tr>
                    <td>{{ $entrega->id }}</td>
                    <td>{{ Carbon\Carbon::parse($entrega->dataSaida)->format('d/m/Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($entrega->dataEntrega)->format('d/m/Y') }}</td>
                    <td>{{ isset($entrega->motorista->nome) ? $entrega->motorista->nome : "Produto não informado" }}</td>
                    <td>
                        <a href="{{ route('entregas.edit', ['id' => $entrega->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $entrega->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $entregas->links('pagination::bootstrap-4') }}

    <a href="{{ route('entregas.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"entregas"
@endsection
