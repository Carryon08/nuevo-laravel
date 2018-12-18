
@extends('layout')

@section('title', "Usuario {$id}")
@section('content')
        <h1>{{ $title }}</h1>
        <hr>
        <h3>detalle del usuario numero {{ $id }}</h3>
@endsection
   

