<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Rutas estudiantes.
Route::group(['namespace' => 'Estudiantes'], function()
{
    Route::get('students' ,'EstudianteController@index');
    Route::post('buscar_estudiante' ,'EstudianteController@buscar');
    Route::post('students','EstudianteController@store');
    Route::post('delete_students', 'EstudianteController@destroy');
    Route::put('students','EstudianteController@edit');


});

// Rutas productos.
Route::group(['namespace' => 'Productos'], function()
{
    Route::get('products' ,'ProductoController@index');
    Route::post('buscar_producto' ,'ProductoController@buscar');
    Route::post('create_producto','ProductoController@store');
    Route::post('delete_products', 'ProductoController@destroy');
    Route::put('products','ProductoController@edit');


});

Route::group(['middleware' => ['jwt.verify']], function () {

});


// });
