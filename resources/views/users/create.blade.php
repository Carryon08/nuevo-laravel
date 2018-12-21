
@extends('layout')

@section('title', "Crear usuario")
@section('content')
        <h1>Crear usuario</h1>
        <hr>

        <form method="POST" action="{{ route('users.crear') }}">
            {{ csrf_field() }}

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Nombre Apellido">
<br>
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" placeholder="algo@algo.com">
<br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Mas de 6 caracteres">
            <br>

            <button type="submit">Crear usuario</button>
        </form>

     <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </p>

@endsection
