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


//Guía de Urbanidad y Valores

Route::get('/Guia-de-Urbanidad-y-Valores', function(){
	return view('libros.Guia-de-Urbanidad-y-Valores');
});


Route::get('/Guia-de-Urbanidad-y-Valores-Descarga', function(){
	return view('libros.Guia-de-Urbanidad-y-Valores-Descarga');
});

//Motivación Para El Exito
Route::get('/Motivacion-para-el-Exito', function(){
	return view('libros.Motivacion-para-el-Exito');
});


Route::get('/motivacion_descarga', function(){
	return view('libros.motivacion_descarga');
});



//Su Tiempo Es Oro
Route::get('/Su-Tiempo-Es-Oro', function(){
	return view('libros.Su-Tiempo-Es-Oro');
});

Route::get('/su_tiempo_es_oro_descarga', function(){
	return view('libros.su_tiempo_es_oro_descarga');
});


//Las-Mejores-Recetas-de-la-Comida-Peruana
Route::get('/Las-Mejores-Recetas-de-la-Comida-Peruana', function(){
	return view('libros.Las-Mejores-Recetas-de-la-Comida-Peruana');
});

Route::get('/recetas-descarga', function(){
	return view('libros.recetas-descarga');
});

//Machu Picchu
Route::get('/Machu-Picchu', function(){
	return view('libros.Machu-Picchu');
});

Route::get('/machu_picchu_descarga', function(){
	return view('libros.machu_picchu_descarga');
});



Route::get('/Gracias-por-confiar-en-nosotros', function(){
	return view('libros.Gracias-por-confiar-en-nosotros');
});


