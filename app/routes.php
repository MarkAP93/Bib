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
*/

Route::get('/', function()
{

	//$autor=new Autor;
	//$autor->Nombre="Martin";
	//$autor->save();

	//$libro=new Libro;
	//$libro->Nombre="Quijote";
	//$libro->tag="<aventura> <epica>";
	//$libro->user_id=13;
	//$libro->autor_id=1;
	//$libro->save();


	
	//$libro->save();
	//libros de usuario 11
	//$user= User::find(11);
	//return $user->libros()->get();
    if(Auth::guest()) return View::make('home');
	if(Auth::check()) return View::make('private');

});
Route::get('/users/eliminar', function()
{
	
	if(Auth::guest()) return Redirect::to('/');

	return View::make('Usuarios.eliminar');

});
Route::get('/private', function()
{
	

	return View::make('private');

});
Route::get('/users/eliminarHandler',function()
	{
		//return "hola";
		$id=Input::get('id');
		return Redirect::route('users.destroy',["id"=>$id]); 
	});
Route::get('/users/actualizar',function()
	{
		return View::make('Usuarios.actualizar'); 
	});
Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController');
Route::get('/login','SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/admin',function(){
	return "adminPage";
});
Route::get('/libros',function(){
	if(Auth::check()){//si hay usuario registrado 
	     //$user= User::find(Auth::user()->id);
	     $libros=Auth::user()->libros()->get();
	     var_dump($libros);
	     //return $libros;
		 return View::make('Libros.index')->with(["libros"=>$libros]);
	}
	else{
		return "no estas autentificado";
	}
});