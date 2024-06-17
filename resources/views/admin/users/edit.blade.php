@extends('admin.layouts.app')

@section('title', 'Editar usuário')

@section('content')
<h1 class="text-xl">Editar o usuário {{ $user->name }} </h1>

<x-alert/>

<form action="{{ route('users.update', $user->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail" value=" {{ $user->email }} ">
    <button type="submit">Enviar</button>
</form>

@endsection