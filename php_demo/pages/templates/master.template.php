<!DOCTYPE html>
<html>
<head>
	<title>PHP Demo Project - <?php echo $page->title() ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="page-header"><h1><?php echo $page->title() ?></h1></div>
	<div class="content">
		<?php include($page->template()); ?>
	</div>
</div>
</body>
</html>