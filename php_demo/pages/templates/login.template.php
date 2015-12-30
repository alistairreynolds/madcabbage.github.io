<form method="post" action="?page=login&amp;action=login">
	<input type="email" name="email" placeholder="email" value="madcabbage@gmail.com">
	<input type="password" name="password" placeholder="password" value="flobadob">
	<input type="submit">
</form>

<?php

	$action = isset($_GET['action']) ? $_GET['action'] : null;

	switch ($action) {
		case 'login':
			if(isset($_POST['email']) && isset($_POST['password'])){
				$username = $_POST['email'];
				$password = $_POST['password'];
				if($user->login($username, $password)){
					echo $user->getName();
				}else{
					echo "incorrect password";
				};
				
			}
			break;
		
		default:
			# code...
			break;
	}

?>