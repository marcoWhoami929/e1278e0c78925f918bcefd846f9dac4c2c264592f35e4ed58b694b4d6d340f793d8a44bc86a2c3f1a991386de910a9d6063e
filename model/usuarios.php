<?php
class Acciones
{

    private $nombreUsuario;
    private $passwordUsuario;
    private $table = "Carrera";

    function __construct($nombreUsuario = null, $passwordUsuario = null)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->passwordUsuario = $passwordUsuario;
    }

    function selectAllUsers()
    {
        return "SELECT * FROM $this->table";
    }
}
