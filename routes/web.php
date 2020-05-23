<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('dashboard', function () {
    return redirect('home/dashboard');
});
|
*/

/*Route::Redirect('/', 'Publicidad');*/

Route::get('/', 'Web\PageController@inicio')->name('inicio');

Route::get('Publicidad', 'Web\PageController@index')->name('index');

//libros

Route::get('/Guia-de-Urbanidad-y-Valores', function(){
	return view('libros.Guia-de-Urbanidad-y-Valores');
});


Route::get('/Guia-de-Urbanidad-y-Valores-Descarga', function(){
	return view('libros.Guia-de-Urbanidad-y-Valores-Descarga');
});



Route::get('/Su-Tiempo-Es-Oro', function(){
	return view('libros.Su-Tiempo-Es-Oro');
});


Route::get('/Gracias-por-confiar-en-nosotros', function(){
	return view('libros.Gracias-por-confiar-en-nosotros');
});
