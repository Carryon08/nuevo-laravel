@extends('layout')

@section('title',"Usuarios")

@section ('content')
    <div class="d-flex justify-content-between aling-items-end mb-2">
            <h1 class="pb-1">{{ $title }}</h1>

            <p>
                <a href="{{ route('users.create')}}" class="btn btn-primary">Nuevo usuario</a>
            </p>
    </div>

    @if ($users->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
          <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>

                <form action="{{ route('users.destroy', $user)}}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="{{ route('users.show', $user)}}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('users.edit', $user)}}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <p>No hay usuarios registrados</p>
      @endif



@endsection

