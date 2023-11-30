@extends('layouts.default')

@section('content')

<h1>Lotes</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'lotes']) !!}
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
            <th>Quantidade de Produto</th>
            <th>Data de Fabricação</th>
            <th>Data de Validade</th>
            <th>Produto*</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($lotes as $lote)
                <tr>
                    <td>{{ $lote->id }}</td>
                    <td>{{ $lote->quantidadeProduto }}</td>
                    <td>{{ Carbon\Carbon::parse($lote->dataFabricacao)->format('d/m/Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($lote->dataValidade)->format('d/m/Y') }}</td>
                    <td>{{ isset($lote->produto->descricao) ? $lote->produto->descricao : "Produto não informado" }}</td>
                    <td>
                        <a href="{{ route('lotes.edit', ['id' => $lote->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $lote->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $lotes->links('pagination::bootstrap-4') }}
    
    <a href="{{ route('lotes.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"lotes"
@endsection
