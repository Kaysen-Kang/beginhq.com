<!doctype html>
<html>
<head>
	<title>Aritcles</title>
</head>
<body>
<div>
	<div id="header">
		@if (Session::get('auth_user'))
			<a href="{{ URL::route('admin.logout') }}">Logout</a>
		@endif
	</div>
	<div id="content">
		@yield('content')
	</div>
</div>
</body>
</html>