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
				$ClaveCarrera = $_POST["ClaveCarrera"];
				$NombreCarrera = $_POST["NombreCarrera"];
				$carrera = new Carrera($idCarrera, $ClaveCarrera, $NombreCarrera);
				$r=$db->update($carrera->updateCarreraStr());

				if ($r) {
					echo "Modificado";
				}else{
					echo "Error";
				}

		break;
	
	default:
		echo "Opción de envio inválida";
		break;
}
?>