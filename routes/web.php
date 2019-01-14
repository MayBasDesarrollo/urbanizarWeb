<?php

//HOME DE LA PAGINA
Route::get('/','HomeController@index')->name('prop.home');

//DETALLE DE LA PROPIEDAD
Route::get('propiedades/{propiedad}', 'PropiedadesController@show')
        ->where('propiedad', '[0-9]+')
        ->name('prop.show');

//LISTADO DE PROPIEDADES
Route::get('propiedades/', 'PropiedadesController@index')->name('prop.index');