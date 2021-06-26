<?php

header("Content-Type: text/html; charset=utf-8");

require_once "config.php";

class ConnectDB{

	private $conn;

	function connect(){

		$this->conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if (!$this->conn) {

			echo "Error al conectarse a la BD".$this->conn->connect_error;

	

		}else{

		   

			$this->conn->set_charset(DB_CHARSET);

		}

	}



	function close(){

		if ($this->conn) {

			$this->conn->close();

		}

	}



	function insert($sql){

		$r= $this->conn->query($sql);

		if (!$r) {

			echo "Error".$this->conn->error;

		}

		return $r;

	}



	function update($sql){

		$r = $this->conn->query($sql);

		if (!$r) {

			echo "Error".$this->conn->error;

		}

		return $r;

	}



	function delete($sql){

		$r = $this->conn->query($sql);

		if (!$r) {

			echo "Error".$this->conn->error;

		}

		return $r;

	}

	function select($sql){

		$r = $this->conn->query($sql);

		if ($r) {

			$salida=array();

			$salida= $r->fetch_all(MYSQLI_ASSOC);

			return $salida;

		}else {

			echo "Error".$this->conn->error;

		}

		

	}





}



?>