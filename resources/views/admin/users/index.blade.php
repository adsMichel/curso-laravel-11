@extends('admin.layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 class="text-xl">Usuários</h1>

<a href="{{ route('users.create') }}">Novo</a>

<x-alert/>

<table class="w-full">
    <tr>
        <th class="border border-yellow-400">Nome</th>
        <th class="border border-yellow-400">E-mail</th>
        <th class="border border-yellow-400">Ações</th>
    </tr>
    @forelse ($users as $user)
    <tr>
        <td class="border border-yellow-400">{{ $user->name }}</td>
        <td class="border border-yellow-400">{{ $user->email }}</td>
        <td class="border border-yellow-400"><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
    </tr>
    @empty
    <p>Não há usuários</p>
    @endforelse
</table>

{{ $users->links() }}

@endsection