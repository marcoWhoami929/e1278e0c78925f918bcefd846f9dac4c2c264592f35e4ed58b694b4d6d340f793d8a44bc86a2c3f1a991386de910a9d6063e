<?php
header("Content-Type: text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *");

require_once "../model/Carrera.php";
require_once "../db/ConnectDB.php";

$metodo = $_SERVER["REQUEST_METHOD"];
$db= new ConnectDB();
$db->connect();

switch ($metodo) {
	case "POST": 
				$idCarrera = $_POST["idCarrera"];
				$carrera = new Carrera($idCarrera);
				$r=$db->delete($carrera->deleteCarreraStr());

				if ($r) {
					echo "Eliminado";
				}else{
					echo "Error";
				}

		break;
	
	default:
		echo "Opción de envio inválida";
		break;
}
?>