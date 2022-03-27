@extends('layouts.app')
@section('title', "Editar usuário {$user->name}" )

@section('content')
    <h3>Editar  usuário {{ $user->name }}</h3>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ??  old('name') }}">
        <input type="email" name="email" placeholder="Email:" value="{{ $user->email ?? old('email') }}">
        <input type="password" name="password" placeholder="Password:">
        <input type="submit" value="Salvar">
    </form>
@endsection