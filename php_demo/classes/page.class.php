<?php

	class Page{
		private $Title = '';
		private $Template = '';

		function setTitle($title){
			$this->Title = ucfirst($title);
		}

		function setTemplate($template){
			$this->Template = $template;
		}

		function title(){
			return $this->Title;
		}

		function template(){
			return $this->Template;
		}

	}

?>