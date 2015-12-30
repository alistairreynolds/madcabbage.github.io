<?php
	
	require 'config.php';
	require 'functions.php';
	require 'classes/user.class.php';
	require 'classes/db.class.php';
	require 'classes/page.class.php';

	$db = new DB();
	$user = new User();
	
	session_start();

	// get page URL
	$pageName = isset($_GET['page']) ? $_GET['page'] : 'login';

	// our allowed pages, so we don't get people passing pages that aren't allowed
	$allowed_pages = array('login');
	if(!in_array($pageName, $allowed_pages)){
		$pageName = 'login';
	}

	// create a new page object based on passed URL
	$page = getPage($pageName);
	require 'pages/templates/master.template.php';

?>