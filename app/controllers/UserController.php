<?php

class UserController extends \BaseController {

	
	public function __contruct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		$users = User::all();
		return View::make('users.index', ['users' => $users]);
	}
 

	public function show($username)
	{
		$users = User::whereUsername($username)->first();
		return View::make('users.show', ['users' => $users]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{

		if ( ! User::isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors(User::$erros);
		}

		/*
		$validation = Validator::make(Input::all(), User::$rules);

		if($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		*/

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::to('/users');
	}

	public function edit($id)
	{
		$users = User::whereId($id)->first();
		return View::make('users.edit', ['users' => $users]);
	}

	public function update($id)
	{
		$user = new User;
		$user = User::find($id);
		$user->username = Input::get('username');
		$user->save();
	

		return Redirect::to('/users');
	}

	public function destroy($id)
	{
		$user = new User;

		$user = User::find($id);
		$user->delete();

		return Redirect::to('/users');
	}

}
