
@extends('layout')

@section('title', "Crear usuario")
@section('content')
        <h1>Crear usuario</h1>
        <hr>

        @if ($errors->any)
        <div class="alert alert-danger">
            <h6>Corregir los siguientes errores</h6>
            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> --}}
        </div>
        @endif

        <form method="POST" action="{{ route('users.crear') }}">
            {{ csrf_field() }}

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Nombre Apellido" value="{{ old('name')}}">
            @if ($errors->has('name'))
                <p>{{$errors->first('name')}}</p>
            @endif
<br>
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" placeholder="algo@algo.com" value="{{ old('email')}}">
            @if ($errors->has('email'))
                <p>{{$errors->first('email')}}</p>
            @endif
<br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Mas de 6 caracteres">
            @if ($errors->has('password'))
                <p>{{$errors->first('password')}}</p>
            @endif
            <br>

            <button type="submit">Crear usuario</button>
        </form>

     <p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </p>

@endsection
