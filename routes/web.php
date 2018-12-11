<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function() {
//Roles
Route::post('roles/store', 'RoleController@store')->name('roles.store')
->middleware('permission:roles.create');
Route::get('roles', 'RoleController@index')->name('roles.index')
->middleware('permission:roles.index');
Route::get('roles/create', 'RoleController@create')->name('roles.create')
->middleware('permission:roles.create');
Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
->middleware('permission:roles.edit');
Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
->middleware('permission:roles.show');
Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
->middleware('permission:roles.destroy');
Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
->middleware('permission:roles.edit');
//Users
Route::get('users', 'UserController@index')->name('users.index')
->middleware('permission:users.index');
Route::put('users/{user}', 'UserController@update')->name('users.update')
->middleware('permission:users.edit');
Route::get('users/{user}', 'UserController@show')->name('users.show')
->middleware('permission:users.show');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
->middleware('permission:users.destroy');
Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
->middleware('permission:users.edit');
//Proyects
Route::post('proyects/store', 'ProyectController@store')->name('proyects.store')
->middleware('permission:proyects.create');
Route::get('proyects', 'ProyectController@index')->name('proyects.index')
->middleware('permission:proyects.index');
Route::get('proyects/create', 'ProyectController@create')->name('proyects.create')
->middleware('permission:proyects.create');
Route::put('proyects/{proyect}', 'ProyectController@update')->name('proyects.update')
->middleware('permission:proyects.edit');
Route::get('proyects/{proyect}', 'ProyectController@show')->name('proyects.show')
->middleware('permission:proyects.show');
Route::delete('proyects/{proyect}', 'ProyectController@destroy')->name('proyects.destroy')
->middleware('permission:proyects.destroy');
Route::get('proyects/{proyect}/edit', 'ProyectController@edit')->name('proyects.edit')
->middleware('permission:proyects.edit');
});
