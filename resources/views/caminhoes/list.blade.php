@extends('layouts.default')

@section('content')
    <h1>Caminhoes</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'caminhoes']) !!}
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
            <th>Placa</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($caminhoes as $caminhao)
                <tr>
                    <td>{{ $caminhao->id }}</td>
                    <td>{{ $caminhao->placa }}</td>
                    <td>
                        <a href="{{ route('caminhoes.edit', ['id' => $caminhao->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $caminhao->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $caminhoes->links('pagination::bootstrap-4') }}


    <a href="{{ route('caminhoes.create', []) }}" class="btn btn-primary">Adicionar</a>
@stop

@section('table-delete')
"caminhoes"
@endsection
