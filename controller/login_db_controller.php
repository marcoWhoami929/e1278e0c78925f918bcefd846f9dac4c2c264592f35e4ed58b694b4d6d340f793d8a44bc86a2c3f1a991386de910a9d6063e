<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");

require_once "../model/usuarios.php";

require_once "../db/ConnectDB.php";

$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();

switch ($metodo) {  
    
    case "POST":

        $nombreUsuario = $_POST["user"];

        $passwordUsuario = $_POST["password"];

        $login = new Acciones($nombreUsuario,$passwordUsuario);

        $result = $db->select($login->loginUser());

        $total = count($result);
 
		if ($total > 0) {

			echo "login_ok";

		}else{

			echo "error_login";

		}
        
        break;



    default:

        echo "Opción de envio inválida";

        break;
}

?>