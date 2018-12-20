<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    //c

    public function index()
    {
        // if (request()->has('empty')){
        //     $users = [];
        // }
        // else{
        //     $users = [
        //         'joel','juan','pepe','billy',
        //     ];

        // } listado estatico

        //$users = DB::table('users')->get();
        //con eloquent
        $users = User::all();

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
