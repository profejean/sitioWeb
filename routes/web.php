<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
return view('welcome');
});
 */

Route::get('/', 'InicioController@index')->name('inicio');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::middleware(['nivel'])->group(function () {

        Route::get('/home', 'HomeController@index')->name('home');

        //inicio

        Route::get('inicio_edit', 'InicioController@edit')->name('inicio_edit');
        Route::patch('inicio_update', 'InicioController@update')->name('inicio_update');

        // Identidad

        Route::get('identidad_edit', 'IdentidadController@edit')->name('identidad_edit');
        Route::patch('identidad_update', 'IdentidadController@update')->name('identidad_update');

        // Aprendizaje

        Route::get('aprendizaje_edit', 'AprendizajeController@edit')->name('aprendizaje_edit');
        Route::patch('aprendizaje_update', 'AprendizajeController@update')->name('aprendizaje_update');

        // Pildora

        Route::get('pildora_edit', 'PildoraController@edit')->name('pildora_edit');
        Route::patch('pildora_update', 'PildoraController@update')->name('pildora_update');

        //carrusel

        Route::get('carrusel_editar', 'CarruselController@edit')->name('carrusel_editar');
        Route::patch('carrusel_update', 'CarruselController@update')->name('carrusel_update');

        //evento

        Route::get('evento', 'EventoController@index')->name('evento_index');
        Route::get('evento/create', 'EventoController@create')->name('evento_create');
        Route::post('evento_store', 'EventoController@store')->name('evento_store');
        Route::get('evento_edit/{slug}', 'EventoController@edit')->name('evento_edit');
        Route::patch('evento_update/{slug}', 'EventoController@update')->name('evento_update');

        Route::post('evento_borrar/{id}', 'EventoController@delete')->name('evento_borrar');

        //articulo

        Route::get('articulo', 'ArticuloController@index')->name('articulo_index');
        Route::get('articulo/create', 'ArticuloController@create')->name('articulo_create');
        Route::post('articulo_store', 'ArticuloController@store')->name('articulo_store');
        Route::get('articulo_edit/{slug}', 'ArticuloController@edit')->name('articulo_edit');
        Route::patch('articulo_update/{slug}', 'ArticuloController@update')->name('articulo_update');

        Route::post('articulo_borrar/{id}', 'ArticuloController@delete')->name('articulo_borrar');

        //terapeuta

        Route::get('terapeuta', 'OrientacionController@indexTerapeuta')->name('terapeuta_index');
        Route::get('terapeuta/create', 'OrientacionController@createTerapeuta')->name('terapeuta_create');
        Route::post('terapeuta_store', 'OrientacionController@storeTerapeuta')->name('terapeuta_store');
        Route::get('terapeuta_edit/{slug}', 'OrientacionController@editTerapeuta')->name('terapeuta_edit');
        Route::patch('terapeuta_update/{slug}', 'OrientacionController@updateTerapeuta')->name('terapeuta_update');

        Route::post('terapeuta_borrar/{id}', 'OrientacionController@deleteTerapeuta')->name('terapeuta_borrar');

        //Apoyo

        Route::get('apoyo', 'OrientacionController@indexApoyo')->name('apoyo_index');
        Route::get('apoyo/create', 'OrientacionController@createApoyo')->name('apoyo_create');
        Route::post('apoyo_store', 'OrientacionController@storeApoyo')->name('apoyo_store');
        Route::get('apoyo_edit/{slug}', 'OrientacionController@editApoyo')->name('apoyo_edit');
        Route::patch('apoyo_update/{slug}', 'OrientacionController@updateApoyo')->name('apoyo_update');

        Route::post('apoyo_borrar/{id}', 'OrientacionController@deleteApoyo')->name('apoyo_borrar');

        //aliado

        Route::get('aliado', 'AliadoController@index')->name('aliado_index');
        Route::get('aliado/create', 'AliadoController@create')->name('aliado_create');
        Route::post('aliado_store', 'AliadoController@store')->name('aliado_store');
        Route::get('aliado_edit/{slug}', 'AliadoController@edit')->name('aliado_edit');
        Route::patch('aliado_update/{slug}', 'AliadoController@update')->name('aliado_update');

        Route::post('aliado_borrar/{id}', 'AliadoController@delete')->name('aliado_borrar');
    });

});

//evento
Route::get('evento_descargar/{slug}', 'EventoController@descargar')->name('evento_descargar');
Route::get('evento_show/{slug}', 'EventoController@show')->name('evento_show');

//calendario

Route::get('articulo_show/{slug}', 'ArticuloController@show')->name('articulo_show');

Route::get('calendario', 'CalendarioController@calendario')->name('calendario');
Route::get('recurso', 'RecursoController@recurso')->name('recurso');

Route::post('iniciar_sesion', 'ComentarioController@sesion')->name('iniciar_sesion');

Route::post('comentarios', 'ComentarioController@comentarios')->name('comentarios');

Route::get('orientacion', 'OrientacionController@index')->name('orientacion');

Route::post('createUser', 'UserController@createUser')->name('createUser');
