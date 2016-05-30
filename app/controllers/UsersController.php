<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users=User::all();
		var_dump($users);
		return View::make('Usuarios.show')->with([ "users"=>$users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('Usuarios.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
		//coger del form con Input::
		$user=new User;
		$user->username=Input::get('username');
		$user->password=Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('users.index');//por nombre de recurso o URl tmb

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		$users=User::find($id);

		
		//$users=DB::table('users')->where("id",$id)->get();
		
		print_r($users);
	
		return View::make('Usuarios.showid')->with([ "users"=>$users]);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$iden=Input::get('id');
		$users=User::find($iden);
		$users->username=Input::get('username');
		

		$users->save();
		return Redirect::route('users.index');

		//DB::table('users')
        //->where('email', $userEmail)  // find your user by their email
        //->limit(1)  // optional - to ensure only one record is updated.
        //->update(array('member_type' => $plan));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		$iden=Input::get('id');
		$users=User::find($iden);
		
		

		$users->delete();
		return Redirect::route('users.index');
	}


}
