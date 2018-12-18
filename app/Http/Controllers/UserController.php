<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //c

    public function index()
    {
        if (request()->has('empty')){
            $users = [];
        }
        else{
            $users = [
                'joel','juan','pepe','billy',
            ];
      
        }
        $title='Listado de usuarios';
        
        return view('users.index', compact('title','users'));
    }
    public function show($id)
    {
        
        $title = 'Detalle de uruario';

        return view('users.Detail', compact('title','id'));
    }
    public function create()
    {
        return 'Crear nuevo usuario';
    }

}
