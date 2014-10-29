<?php


Route::resource('users', 'UserController');

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::get('admin', function()
{
	return 'admin page';
})->before('auth');



/*
Route::get('/', function()
{

	
	$user = new User;

	$user->username = "teste";
	$user->password = Hash::make("123");
	$user->save();
	


	
	User::create([

		'username' => 'teste create',
		'password' => Hash::make('123')
	]);
	
	
	$users = User::all();
	return View::make('users.index', ['users' => $users]);
});
*/


//Route::get('/users', 'UserController@index');
//Route::get('/users/{username}', 'UserController@show');


/*
Route::get('/users/{username}', function($username)
{

	$user = User::whereUsername($username)->first();
	return View::make('users.show', ['users' => $user]);
});
*/
