<?php

class Pacientes
{
    private $id;
    private $nombreCompleto;
    private $direccion;
    private $ciudad;
    private $telefono;
    private $celular;
    private $fechaNacimiento;
    private $ocupacion;
    private $edad;
    private $nombreCompletoPadre;
    private $nombreCompletoMadre;
    private $fechaRegistro;
    private $pacientes = "pacientes";

    //Generacion del contructor

    function __construct($id = null, $nombreCompleto = null, $direccion = null, $ciudad = null, $telefono = null, $celular = null, $fechaNacimiento = null, $ocupacion = null, $edad = null, $nombreCompletoPadre = null, $nombreCompletoMadre = null, $fechaRegistro = null)
    {
        $this->id = $id;
        $this->nombreCompleto = $nombreCompleto;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
        $this->celular = $celular;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->ocupacion = $ocupacion;
        $this->edad = $edad;
        $this->nombreCompletoPadre = $nombreCompletoPadre;
        $this->nombreCompletoMadre = $nombreCompletoMadre;
        $this->fechaRegistro = $fechaRegistro;
    }

    function selectPacientes()
    {

        return "SELECT * FROM $this->pacientes";
    }
    function registrarPaciente()
    {
        return "INSERT INTO $this->table values ('$this->id','$this->nombreCompleto','$this->direccion','$this->ciudad','$this->telefono','$this->celular','$this->fechaNacimiento','$this->ocupacion','$this->edad','$this->nombreCompletoPadre','$this->nombreCompletoMadre','$this->fechaRegistro')";
    }
}
