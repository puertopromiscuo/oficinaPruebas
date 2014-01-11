<?php
	//conexion como global
	require("mysqlConection.php");

	$db = getConnet();

	function getUser($id){
		return "Hello,$id";
	}

	function getUserName($id){
		global $db;
		$query = "SELECT name FROM users WHERE id='$id'";
		$result = mysqli_query($db,$query);

		$row = mysqli_fetch_array($result);
		return $row['name'];

	}

	function insertUser($name,$password){
		global $db;
		$query = "INSERT into users (name,password) values('$name','$password')";
		$result = mysqli_query($db,$query);
		if($result) echo "Usuario insertado: $name"; else echo "Error ".mysqli_error($db);
		return $result;
	}

	function deleteUser($id){
		global $db;
		$query = "DELETE from users WHERE id=$id";
		$result = mysqli_query($db,$query);
		//if($result) echo "Usuario borrado"; else echo "Error ".mysqli_error($db);//error al devolver false
		return mysqli_affected_rows($db);
	}

	
?>