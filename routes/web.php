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
    ->name('users.nuevo');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')
    ->name('inicioLaravel');
