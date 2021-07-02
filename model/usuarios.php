<?php
class Acciones
{
    private $id;
    private $nombreUsuario;
    private $passwordUsuario;
    private $nombreCompleto;
    private $email;
    private $password;
    private $fechaRegistro;
    private $table = "usuarios";

    function __construct($id = null, $nombreCompleto = null, $nombreUsuario = null, $email = null, $passwordUsuario = null, $fechaRegistro = null)
    {
        $this->id = $id;
        $this->nombreUsuario = $nombreUsuario;
        $this->passwordUsuario = $passwordUsuario;
        $this->nombreCompleto = $nombreCompleto;
        $this->email = $email;
        $this->password = $passwordUsuario;
        $this->fechaRegistro = $fechaRegistro;
    }

    function selectAllUsers()
    {
        return "SELECT * FROM $this->table";
    }
    function loginUser()
    {

        return "SELECT * FROM $this->table where nombreUsuario = '$this->nombreUsuario' and password = '$this->passwordUsuario'";
    }
    function registrarUsuario()
    {
        return "INSERT INTO $this->table values ('$this->id','$this->nombreCompleto','$this->nombreUsuario','$this->email','$this->password','$this->fechaRegistro')";
    }
}
