
@extends('layout')

@section('title', "Usuario {$user->id}")
@section('content')
        <h1>Usuario # {{ $user->id }}</h1>
        <hr>
        <h3>Nombre del usuario: {{ $user->name }}</h3>
        <h2>Correo electronico: {{ $user->email}} </h2>
     <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a> 
        <br>
        <a href="{{ route('users.edit', $user)}}">Editar</a>
        <form action="{{ route('users.destroy', $user)}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit">Eliminar</button>
        </form>
    </p>

@endsection


