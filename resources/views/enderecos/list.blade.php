@extends('layouts.default')

@section('content')

<h1>Endereços</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'enderecos']) !!}
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
            <th>Cep</th>
            <th>Logradouro</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Data de criação</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($enderecos as $endereco)
                <tr>
                    <td>{{ $endereco->id }}</td>
                    <td>{{ $endereco->cep }}</td>
                    <td>{{ $endereco->logradouro }}</td>
                    <td>{{ $endereco->numero }}</td>
                    <td>{{ $endereco->bairro }}</td>
                    <td>{{ $endereco->cidade }}</td>
                    <td>{{ $endereco->estado }}</td>
                    <td>{{(new DateTime($endereco->created_at))->format('d/m/Y H:i:s')}}</td>
                    <td>
                        <a href="{{ route('enderecos.edit', ['id' => $endereco->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $endereco->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $enderecos->links('pagination::bootstrap-4') }}

    <a href="{{ route('enderecos.search', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"enderecos"
@endsection
