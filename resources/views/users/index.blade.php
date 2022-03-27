@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h3>Listagem dos usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h3>
    
    <ul>
        @foreach ($users as $item)
            <li>{{ $item->name }} - {{ $item->email }}
                | <a href="{{ route('users.show', $item->id) }}">Detalhes</a>
                | <a href="{{ route('users.edit', $item->id) }}">Editar</a>
            </li>
        @endforeach
</ul>
@endsection