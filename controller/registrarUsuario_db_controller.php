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

        $nombreCompleto = $_POST["nombreCompleto"];

        $nombreUsuario = $_POST["nombreUsuario"];

        $email = $_POST["email"];

        $passwordUsuario = $_POST["passwordUsuario"];
        date_default_timezone_set('America/Mexico_City');
        $DateAndTime = date('Y-m-d h:i:s', time());
        $fechaRegistro = $DateAndTime;
        $registrarUsuario = new Acciones(0, $nombreCompleto, $nombreUsuario, $email, $passwordUsuario, $fechaRegistro);

        $r = $db->insert($registrarUsuario->registrarUsuario());


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
