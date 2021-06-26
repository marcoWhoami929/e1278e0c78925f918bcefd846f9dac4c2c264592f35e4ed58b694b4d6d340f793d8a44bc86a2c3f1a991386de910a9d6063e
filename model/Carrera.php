<?php
class Carrera{
	private $idCarrera;
	private $ClaveCarrera;
	private $NombreCarrera;
	private $table="Carrera";

	//Generacion del contructor
	function __construct($idCarrera=null,$ClaveCarrera=null,$NombreCarrera=null){
		$this->idCarrera=$idCarrera;
		$this->ClaveCarrera=$ClaveCarrera;
		$this->NombreCarrera=$NombreCarrera;
	}

	function selectAllCarrerasStr(){
		return "SELECT * FROM $this->table";
	}
	function insertCarreraStr(){
		return "INSERT INTO $this->table values ('$this->idCarrera','$this->ClaveCarrera','$this->NombreCarrera')";

	}
	function deleteCarreraStr(){
		return "DELETE from $this->table where idCarrera='$this->idCarrera'";
	}
	function updateCarreraStr(){
		return "UPDATE $this->table set ClaveCarrera='$this->ClaveCarrera', NombreCarrera='$this->NombreCarrera' WHERE idCarrera='$this->idCarrera'";
	}
}

?>