<?php

Route::get('/','HomeController@index')->name('prop.home');


Route::get('propiedades/', 'PropiedadesController@index')->name('prop.index');
Route::get('propiedades/{user}', 'PropiedadesController@show')
        ->where('user', '[0-9]+')
        // ->where('id', '[0-9]+')
        ->name('prop.show');
