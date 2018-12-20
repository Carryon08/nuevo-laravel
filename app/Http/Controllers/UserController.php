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
    public function show(User $user)
    {

        //$title = 'Detalle de uruario';

        //$user = User::findOrFail($id);

        // if($user==null)
        // {
        //     return view('erros.404');
        // } este if ayuda si solo de usa el helper find sin tener findOrFail

        return view('users.Detail', compact('user'));
    }



    public function create()
    {
        return 'Crear nuevo usuario';
    }

}
