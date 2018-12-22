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
        return view('users.create');
    }

    public function store()
    {

        $data = request()->validate ([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'password.required' => 'El campo contraseña es obligatorio'
        ]);

        //$data = request()->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

     return redirect()->route('users');;

    }

    public function edit(User $user)
    {
       return view('users.edit',['user'=>$user]);
    }

    public function update(User $user)
    {
        $data = request()->all();
        $data['password'] = bcrypt($data['password']);
        $data->update($data);
        return redirect()->route('user.show',['user'=>$user]);
    }

}
