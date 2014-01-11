<?php

require("../librerias/toro/toro.php");
require("mysqlFunctions.php");

header('Content-Type: application/json; charset=utf-8');

class UserSimple {
    function get($name) {
      echo getUser($name);
    }
}

class GetUserName {
    function get($id) {
      echo getUserName($id);
    }
}

class DeleteUser {
    function get($id) {
      echo deleteUser($id);
    }
}

class InsertUser {
	function get($name,$password){
		insertUser($name,$password);
	}
}

Toro::serve(array(
	"/" => "User",   
    "/:number" => "GetUserName",
    "/name/:alpha/pass/:number" => "InsertUser",
    "/deleteUser/:number" => "DeleteUser"
    

));

?>
