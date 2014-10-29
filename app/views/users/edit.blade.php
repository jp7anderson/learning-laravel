@extends('layouts.default')

@section('content')



<h1>Editar usuario</h1>

	{{ Form::model($users,array('route' => array('users.update', $users->id), 'method' => 'PUT')) }}

	<div>
		{{ Form::label('username', 'Username: ') }}	
		{{ Form::text('username', $users->username) }}
		{{ $errors->first('username') }}
	</div>	

	<div>{{ Form::submit('Create User') }}</div>

	{{ Form::close() }}

@stop