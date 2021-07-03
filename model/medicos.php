<?php

class Medicos
{
    private $id;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $idConsultorio;
    private $idArea;
    private $fechaRegistro;
    private $consultorios = "consultorios";
    private $areas = "area";
    private $table = "medicos";


    //Generacion del contructor

    function __construct($id = null, $nombre = null, $apellidoP = null, $apellidoM = null, $idConsultorio = null, $idArea = null, $fechaRegistro = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidoP = $apellidoP;
        $this->apellidoM = $apellidoM;
        $this->idConsultorio = $idConsultorio;
        $this->idArea = $idArea;
        $this->fechaRegistro = $fechaRegistro;
    }



    function selectConsultorios()
    {

        return "SELECT * FROM $this->consultorios";
    }
    function selectMedicos()
    {

        return "SELECT med.*,con.nombreConsultorio FROM $this->table as med inner join consultorios as con ON med.idConsultorio = con.id order by med.id asc";
    }
    function selectAreas()
    {
        return "SELECT * FROM $this->areas";
    }
    function registrarMedico()
    {
        return "INSERT INTO $this->table values ('$this->id','$this->nombre','$this->apellidoP','$this->apellidoM','$this->idConsultorio','$this->idArea','$this->fechaRegistro')";
    }
}
