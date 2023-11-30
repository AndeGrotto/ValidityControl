@extends('layouts.default')

@section('content')

<h1>Produtos</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'produtos']) !!}
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
            <th>Estoque</th>
            <th>Descrição</th>
            <th>Validade</th>
            <th>Preço</th>
            <th>Tipo de Bebida</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->estoque }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->validade }}</td>
                    <td>R$ {{ $produto->preco }}</td>
                    <td>{{ $produto->tipoBebida }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $produto->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $produtos->links('pagination::bootstrap-4') }}

    <a href="{{ route('produtos.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"produtos"
@endsection
