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

				$ClaveCarrera = $_POST["ClaveCarrera"];

				$NombreCarrera = $_POST["NombreCarrera"];

				$carrera = new Carrera(0, $ClaveCarrera, $NombreCarrera);

				$r=$db->insert($carrera->insertCarreraStr());



				if ($r) {

					echo "Agregado";

				}else{

					echo "Error";

				}



		break;

	

	default:

		echo "Opción de envio inválida";

		break;

}

