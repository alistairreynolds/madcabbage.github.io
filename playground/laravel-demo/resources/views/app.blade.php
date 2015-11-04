<!DOCTYPE html>
<html>
<head>
	<title>Laravel demonstration site</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>@yield('header')</h1>
		@yield('content')
	</div>
</body>
</html>