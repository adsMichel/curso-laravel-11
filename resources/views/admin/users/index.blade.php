<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuários</title>
</head>

<body>
    <h1>Usuários</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="">Editar</a>
                </td>
            </tr>
        @empty
            <p>Não há usuários</p>
        @endforelse
    </table>

    {{ $users->links() }}
</body>

</html>
