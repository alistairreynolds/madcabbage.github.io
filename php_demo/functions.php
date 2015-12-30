<?php

	/***************************
		Can be used to override page title etc
	  If not passed, will just use the name of the page passed
	*****************************/
	function getPage($pageName){

		// Default page info
		$page = new Page();
		$page->setTitle($pageName);
		$page->setTemplate($pageName . '.template.php');

		switch ($pageName) {
			default:
				return $page;
				break;
		}
	}


?>