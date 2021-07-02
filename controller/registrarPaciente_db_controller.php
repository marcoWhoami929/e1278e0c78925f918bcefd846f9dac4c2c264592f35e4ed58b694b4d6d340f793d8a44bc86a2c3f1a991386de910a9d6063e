<?php

header("Content-Type: text/html; charset=utf-8");

header("Access-Control-Allow-Origin: *");



require_once "../model/pacientes.php";

require_once "../db/ConnectDB.php";



$metodo = $_SERVER["REQUEST_METHOD"];

$db = new ConnectDB();

$db->connect();



switch ($metodo) {

    case "POST":

        $nombreCompleto = $_POST["nombreCompleto"];

        $direccion  = $_POST["direccion"];

        $ciudad = $_POST["ciudad"];

        $telefono = $_POST["telefono"];

        $celular = $_POST["celular"];

        $fechaNacimiento = date_create($_POST["fechaNacimiento"]);

        $ocupacion = $_POST["ocupacion"];

        $edad = $_POST["edad"];

        $nombreCompletoPadre = $_POST["nombreCompletoPadre"];

        $nombreCompletoMadre = $_POST["nombreCompletoMadre"];

        date_default_timezone_set('America/Mexico_City');
        $DateAndTime = date('Y-m-d h:i:s', time());
        $fechaRegistro = $DateAndTime;
        $fechaNacimientoPaciente = date_format($fechaNacimiento, "Y-m-d");

        $registrarUsuario = new Pacientes(0, $nombreCompleto, $direccion, $ciudad, $telefono, $celular, $fechaNacimientoPaciente, $ocupacion, $edad, $nombreCompletoPadre, $nombreCompletoMadre, $fechaRegistro);

        $r = $db->insert($registrarUsuario->registrarPaciente());


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
