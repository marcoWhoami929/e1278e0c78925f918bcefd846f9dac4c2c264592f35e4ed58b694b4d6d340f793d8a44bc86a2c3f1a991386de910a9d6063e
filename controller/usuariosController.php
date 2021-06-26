<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");

require_once "../model/acciones.php";

require_once "../db/ConnectDB.php";



$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();



switch ($metodo) {

    case "GET":

        $carrera = new Carrera();

        $result = $db->select($carrera->selectAllCarrerasStr());

        echo json_encode($result);

        break;



    default:

        echo "Opción de envio inválida";

        break;
}
