<?php

require_once 'Conexion.php';

class Crud extends Conexion{
	function mostrarDatos(){
		$sql="SELECT ID, NOMBRE, SUELDO, EDAD, FREGISTRO FROM T_CRUD";
		$query=Conexion::conectar()->prepare($sql);
		$query->execute();
		$datos=$query->fetchAll();
		//$query->close();
		
		return $datos;
	}
}