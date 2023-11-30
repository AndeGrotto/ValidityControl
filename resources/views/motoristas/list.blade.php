@extends('layouts.default')

@section('content')

<h1>Motoristas</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'motoristas']) !!}
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
            <th>Nome</th>
            <th>Telefone</th>
            <th>Caminhão*</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($motoristas as $motorista)
                <tr>
                    <td>{{ $motorista->id }}</td>
                    <td>{{ $motorista->nome }}</td>
                    <td>{{ $motorista->telefone }}</td>
                    <td>{{ isset($motorista->caminhao->placa) ? $motorista->caminhao->placa : "Caminhão não informado" }}</td>
                    <td>
                        <a href="{{ route('motoristas.edit', ['id' => $motorista->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $motorista->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $motoristas->links('pagination::bootstrap-4') }}

    <a href="{{ route('motoristas.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"motoristas"
@endsection
