@extends('adminlte::page')

@section('content')
<h1>Usuários</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Palavra de Recuperação</th>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->password }}</td>
                <td>{{ $usuario->palavraRecuperacao }}</td>
            </tr>
        @endforeach
        @stop
    </tbody>
</table>
