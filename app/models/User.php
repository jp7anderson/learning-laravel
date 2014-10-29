<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = false;

	protected $fillable = ['username' ,'password', 'email'];

	public static $erros;

	public static $rules = [
		'username' => 'required',
		'password' => 'required'
	];
	
	protected $table = 'users';

	
	protected $hidden = array('password', 'remember_token');


	public static function isValid($data)
	{
		$validation = Validator::make($data, static::$rules);

		if ($validation->passes()) return true;
		
		static::$erros = $validation->messages();

		return false;
	}

}
