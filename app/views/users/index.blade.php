<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Users</title>

</head>
<body>

<h1>All users</h1>


@foreach ($users as $user)

	<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>

@endforeach

</body>
</html>