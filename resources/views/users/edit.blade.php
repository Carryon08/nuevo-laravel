
@extends('layout')

@section('title', "Editar usuario")
@section('content')
        <h1>Editar usuario</h1>
        <hr>

        @if ($errors->any)
        <div class="alert alert-danger">
            <h6>Corregir los siguientes errores</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Nombre Apellido" value="{{ old('name', $user->name)}}">

<br>
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" placeholder="algo@algo.com" value="{{ old('email',$user->email)}}">

<br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Mas de 6 caracteres">

            <br>

            <button type="submit">Actualizar usuario</button>
        </form>

     <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </p>
@endsection
