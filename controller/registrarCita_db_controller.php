<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");



require_once "../model/citas.php";

require_once "../db/ConnectDB.php";



$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();



switch ($metodo) {

    case "POST":

        $nombreCita = $_POST["nombreCita"];

        $idPaciente  = $_POST["idPaciente"];

        $idMedico = $_POST["idMedico"];

        $idConsultorio = $_POST["idConsultorio"];

        $notas = $_POST["notas"];

        $fechaCita = date_create($_POST["fechaCita"]);

        $horaCita = $_POST["horaCita"];

        date_default_timezone_set('America/Mexico_City');
        $DateAndTime = date('Y-m-d h:i:s', time());
        $fechaRegistro = $DateAndTime;
        $fechaCitaPaciente = date_format($fechaCita, "Y-m-d");

        $registrarCita = new Citas(0, $nombreCita, $idPaciente, $idMedico, $idConsultorio, $notas, $fechaCitaPaciente, $horaCita, $fechaRegistro);

        $r = $db->insert($registrarCita->registrarCita());


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
