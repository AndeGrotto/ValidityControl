<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Usuários</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Palavra de Recuperação</th>
        </tr>
        <tr>
            @foreach($usuarios as $usuario)
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->usuario }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->palavraRecuperacao }}</td>
            <br>
            @endforeach
        </tr>
    </table>

</body>

</html>