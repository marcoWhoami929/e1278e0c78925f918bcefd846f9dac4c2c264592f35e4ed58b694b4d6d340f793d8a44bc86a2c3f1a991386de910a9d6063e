<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");



require_once "../model/pacientes.php";

require_once "../db/ConnectDB.php";



$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();



switch ($metodo) {

    case "GET":

        $pacientes = new Pacientes();

        $result = $db->select($pacientes->selectPacientes());

        echo json_encode($result);

        break;



    default:

        echo "Opción de envio inválida";

        break;
}
