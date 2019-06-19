<?php

//HOME DE LA PAGINA
Route::get('/','HomeController@index')->name('prop.home');

//DETALLE DE LA PROPIEDAD
Route::get('propiedades/{propiedad}', 'PropiedadesController@show')
        ->where('propiedad', '[0-9]+')
        ->name('prop.show');

//LISTADO DE PROPIEDADES
Route::get('propiedades/', 'PropiedadesController@index')->name('prop.index');

//PRIMER BUSCADOR
Route::get('/buscador_principal', 'BuscadorController@busquedaPrincipal')->name('buscador.principal');


/* ************************************** */
Route::get('/home', 'Admin\AdminController@index')
                ->name('AdminHome');

Route::get('usuarios', 'Users\UserController@index')
                ->name('users.index');




Route::get('usuarios/{user}', 'Users\UserController@show')
                ->where('user', '[0-9]+')
                ->name('users.show');

Route::get('usuarios/nuevo', 'Users\UserController@create')
                ->name('users.create');

Route::get('usuarios/{user}/editar', 'Users\UserController@edit')
                ->where('id', '[0-9]+')
                ->name('users.edit');

Route::delete('usuarios/{user}', 'Users\UserController@destroy')
                ->name('users.delete');