@extends('layout')

@section('title',"ListaUsuarios")

@section ('content')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse($users as $user)
        <li>{{ $user->name }}</li>
        @empty
        <li>No hay usuarios registrados</li>
        @endforelse
    </ul>

@endsection

