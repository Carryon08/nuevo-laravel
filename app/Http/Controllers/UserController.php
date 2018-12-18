<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //c

    public function index()
    {
        $users = [
            'joel',
            'juan',
            'pepe',
            'billy',
        ];

        $title='Listado de usuarios';
        
        return view('users', compact('title','users'));
    }
    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }
    public function create()
    {
        return 'Crear nuevo usuario';
    }

}
