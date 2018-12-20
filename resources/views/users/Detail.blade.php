
@extends('layout')

@section('title', "Usuario {$user->id}")
@section('content')
        <h1>Usuario # {{ $user->id }}</h1>
        <hr>
        <h3>Nombre del usuario: {{ $user->name }}</h3>
        <h2>Correo electronico: {{ $user->email}} </h2>
@endsection


