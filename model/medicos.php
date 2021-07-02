<?php

class Medicos
{

    private $consultorios = "consultorios";



    //Generacion del contructor

    function __construct()
    {
    }



    function selectConsultorios()
    {

        return "SELECT * FROM $this->consultorios";
    }
}
