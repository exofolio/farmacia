<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
| Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/',function(){
	return View::make('inicio');
});
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('/');
});
Route::get('catalogo',function(){return View::make('catalogo');});
Route::get('signup',function(){
	return View::make('signup');
});
Route::post('signup','ClientesController@nuevoCliente');
Route::get('login',function(){
	return View::make('login');
});
Route::post('login','ClientesController@iniciarSesion');
Route::get('producto/{id?}',function($id){
  if(Producto::find($id))
    {
    return View::make('ver_producto')->with('id',$id);
    }
    else
    {
    return 'No existe el producto';
    }
});
Route::post('producto/{id?}','CatalogosController@carrito');
Route::get('carrito',function(){
  return View::make('carrito');
});
Route::get('checkout',function(){
  return View::make('checkout');
});
Route::post('carrito','CarritoController@checkout');