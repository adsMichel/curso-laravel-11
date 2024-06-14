@extends('admin.layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1>Usuários</h1>
<a href="{{ route('users.create') }}">Novo</a>

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
        <td><a href="">Editar</a></td>
    </tr>
    @empty
    <p>Não há usuários</p>
    @endforelse
</table>

{{ $users->links() }}

@endsection