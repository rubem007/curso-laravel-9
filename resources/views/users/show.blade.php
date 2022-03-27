@extends('layouts.app')
@section('title', 'Listagem do usuário')
@section('content')
    <h3>Listagem do usuário {{ $user->name }}</h3>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar</button>
    </form>
@endsection
