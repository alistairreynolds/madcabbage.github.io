<!DOCTYPE html>
<html>
<head>
	<title>Films to watch</title>
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/css/select2.min.css" rel="stylesheet" />
</head>
<body>
	@include('partials.navbar')

	<div class="container-fluid" id="pjax-container">
		@include('partials.flash')
		<div class="page-header">
			<h1>@yield('header')</h1>
		</div>
		@yield('content')
	</div>
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1-rc.1/js/select2.min.js"></script>

	<script>
		$(document).pjax('a', '#pjax-container');
	</script>

	@yield('footer')
</body>
</html>