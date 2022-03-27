@extends('layouts.app')
@section('title', 'Novo usuário')

@section('content')
    <h3>Novo  usuário</h3>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    @endif
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email:" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password:">
        <input type="submit" value="Salvar">
    </form>
@endsection