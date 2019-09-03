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

Route::get('/consulta/detalle', 'CompraConsulta@DetalleCompras');
// consulta todas las compras con detalle

Route::get('/consulta/categorias', 'CompraConsulta@categorias');
	
// consulta compras totales por categoria
 
Route::get('/pelicula/{genero}', 'GeneroPelicula@genero')
   ->where ('genero', '[accion,drama,terror,comedia]+');   
// peliculas por genero

Route::get('/consulta/compras', 'CompraConsulta@compras');
// consulta todas las compras
     

  
	

	


