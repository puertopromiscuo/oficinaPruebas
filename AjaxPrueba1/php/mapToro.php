<?php

require("../librerias/toro/toro.php");
require("mysqlFunctions.php");

header('Content-Type: application/json; charset=utf-8');

class HelloHandler {
    function get() {
      echo getUsers("juan");
    }
}

Toro::serve(array(
    "/gugui" => "HelloHandler",
));

?>
