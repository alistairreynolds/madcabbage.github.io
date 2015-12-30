<?php

	class User{
		private $name = '';
		private $uid = '';

		function getName(){
			return $this->name;
		}

		function getUid(){
			return $this->uid;
		}

		function setName($name){
			$this->name = $name;
		}

		function setUid($uid){
			$this->uid = $uid;
		}

		// Logs the user in
		function login($email, $password){
			global $db;

			// check password
			if(!$this->checkPassword($email, $password)){
				echo 'false';
				return false;
			}

			// get user info
			$SQL = "SELECT user_id, name FROM users WHERE email = '$email'";
			if(!$results = $db->selectOne($SQL))
				return false;

			// set user data, return tru
			$this->setUid($results['user_id']);
			$this->setName($results['name']);
			return true;

		}

		// Checks the user password
		function checkPassword($email, $password){
			global $db;

			$email = $db->escapeString($email);
			// Get password has from database
			$SQL = "SELECT password FROM users WHERE email = '$email'";
			if(!$hash = $db->selectOne($SQL))
				return false;

			// Compare agaisnt passed password
			if(password_verify($password, $hash['password'])){
				return true;
			}else{
				return false;
			}			
		}

	};

?>