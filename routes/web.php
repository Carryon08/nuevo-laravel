<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index')
    ->name('users');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')
    ->name('users.create');

Route::post('/usuarios/crear', 'UserController@store')
    ->name('users.crear');

Route::get('/usuarios/{user}/editar', 'UserController@edit' )
    ->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update' )
    ->name('users.update');


Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')
    ->name('inicioLaravel');
