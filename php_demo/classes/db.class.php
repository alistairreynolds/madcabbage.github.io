<?php

	class DB{

		private $con;
		private $connected = false;    // using this to remember connection status so that we can re-use it when escaping before running the query

		// Connect to the database
		function connect(){

			// Only connect if not already connected
			if(!$this->connected){
				global $db_info;
				$this->con = mysqli_connect($db_info['host'], $db_info['username'], $db_info['password'], $db_info['database']);
				if (mysqli_connect_errno()){
	  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 			}else{
	 				$this->connected = true;
	 			}
	 		}
		}

		// Disconnect from database
		function disconnect(){
			mysqli_close($this->con);
			$this->connected = false;
		}

		// runs escape query. $maintain_con maintains the connection after running escape query so don't need to reconnect to run query
		function escapeString($string, $maintan_con = true){
			$this->connect();
			return mysqli_real_escape_string($this->con, $string);
			if($maintain_con == false)
				$this->disconnect();
		}

		// fetch single result
		function selectOne($sql){

			$this->connect();
			$results = mysqli_query($this->con, $sql);
			$row = mysqli_fetch_assoc($results);
  		mysqli_free_result($results);	
  		$this->disconnect();

  		if($row){
  			return $row;
  		}else{
  			return null;
  		}
		}

		// fetch multiple results
		function selectAll($sql){

			$this->connect();
			$results = mysqli_query($this->con, $sql);
			$rows = mysqli_fetch_all($results);
  		mysqli_free_result($results);	
  		$this->disconnect();
  		
  		if($rows){
  			return $rows;
  		}else{
  			return null;
  		}
  	
		}

	}

?>