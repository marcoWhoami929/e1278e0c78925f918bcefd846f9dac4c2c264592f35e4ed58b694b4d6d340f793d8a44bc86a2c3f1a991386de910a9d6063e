<?php
class Acciones
{

    private $nombreUsuario;
    private $passwordUsuario;
    private $table = "usuarios";

    function __construct($nombreUsuario = null, $passwordUsuario = null)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->passwordUsuario = $passwordUsuario;
    }

    function selectAllUsers()
    {
        return "SELECT * FROM $this->table";
    }
    function loginUser(){

        return "SELECT * FROM $this->table where nombreUsuario = '$this->nombreUsuario' and password = '$this->passwordUsuario'";

    }
}
