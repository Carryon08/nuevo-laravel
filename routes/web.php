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

Route::any('/usuarios/{user}/editar', 'UserController@edit' )
    ->name('users.edit');

Route::post('/usuarios/crear', 'UserController@store')
    ->name('users.crear');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')
    ->name('inicioLaravel');
