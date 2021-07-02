<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");



require_once "../model/medicos.php";

require_once "../db/ConnectDB.php";



$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();



switch ($metodo) {

    case "POST":

        $nombre = $_POST["nombre"];

        $apellidoP = $_POST["apellidoP"];

        $apellidoM = $_POST["apellidoM"];

        $idConsultorio = $_POST["idConsultorio"];

        $idArea = $_POST["idArea"];


        date_default_timezone_set('America/Mexico_City');
        $DateAndTime = date('Y-m-d h:i:s', time());
        $fechaRegistro = $DateAndTime;
        $registrarMedico = new Medicos(0, $nombre, $apellidoP, $apellidoM, $idConsultorio, $idArea, $fechaRegistro);

        $r = $db->insert($registrarMedico->registrarMedico());


        if ($r) {

            echo "Agregado";
        } else {

            echo "Error";
        }



        break;



    default:

        echo "Opción de envio inválida";

        break;
}
