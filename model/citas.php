<?php

class Citas
{
    private $id;
    private $nombreCita;
    private $idPaciente;
    private $idMedico;
    private $idConsultorio;
    private $notas;
    private $fechaCita;
    private $horaCita;
    private $fechaRegistro;
    private $citas = "citas";

    //Generacion del contructor

    function __construct($id = null, $nombreCita = null, $idPaciente = null, $idMedico = null, $idConsultorio = null, $notas = null, $fechaCita = null, $horaCita = null, $fechaRegistro = null)
    {
        $this->id = $id;
        $this->nombreCita = $nombreCita;
        $this->idPaciente = $idPaciente;
        $this->idMedico = $idMedico;
        $this->idConsultorio = $idConsultorio;
        $this->notas = $notas;
        $this->fechaCita = $fechaCita;
        $this->horaCita = $horaCita;
        $this->fechaRegistro = $fechaRegistro;
    }

    function selectCitas()
    {

        return "SELECT cit.nombreCita,pac.nombreCompleto,med.nombre,con.nombreConsultorio,cit.notas,cit.fechaCita,cit.horaCita FROM $this->citas as cit inner join pacientes as pac ON cit.idPaciente = pac.id inner join consultorios as con ON cit.idConsultorio = con.id inner join medicos as med ON cit.idMedico = med.id order by cit.id asc";
    }
    function registrarCita()
    {
        return "INSERT INTO $this->citas values ('$this->id','$this->nombreCita','$this->idPaciente','$this->idMedico','$this->idConsultorio','$this->notas','$this->fechaCita','$this->horaCita','$this->fechaRegistro')";
    }
}
