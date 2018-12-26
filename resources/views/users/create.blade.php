
@extends('layout')

@section('title', "Crear usuario")
@section('content')

    <div class="car">
        <h2 class="card-header">Crear usuario</h2>
        <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Corregir los siguientes errores</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('users.crear') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Apellido" value="{{ old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="algo@algo.com" value="{{ old('email')}}">
                    </div>

                    <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mas de 6 caracteres">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear usuario</button>
                    <a href="{{ route('users') }}" class="btn btn-link">Regresar al listado de usuarios</a>
                </form>
        </div>
    </div>



@endsection
