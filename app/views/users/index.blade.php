@extends('layouts.default')

@section('content')

<h1>Menu</h1>

<p>{{ link_to('users/create', 'Create') }}</p>




<h1>Lista de Usuarios</h1>


@foreach ($users as $user)
	
	<li>{{ link_to("users/{$user->username}", $user->username) }}  {{ link_to("users/{$user->id}/edit", 'Editar') }} 

		{{ Form::open(array('method' => 'DELETE', 'route' =>
		array('users.destroy', $user->id))) }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</li>

@endforeach

@stop