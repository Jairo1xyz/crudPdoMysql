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

	function insertarDatos($datos){
		$sql = "INSERT INTO T_CRUD (NOMBRE, SUELDO, EDAD, FREGISTRO) VALUES (:nombre, :sueldo, :edad, :fregistro)";
		$query=Conexion::conectar()->prepare($sql);

		// ESTO QUE ESTÁ COMENTADO DA ERROR
		/*$query->bind_param(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$query->bind_param(":sueldo", $datos["sueldo"], PDO::PARAM_STR);
		$query->bind_param(":edad", $datos["edad"], PDO::PARAM_INT);
		$query->bind_param(":fregistro", $datos["fecha"], PDO::PARAM_STR);*/

		return $query->execute(array(
			":nombre" => $datos["nombre"],
			":sueldo" => $datos["sueldo"],
			":edad" => $datos["edad"],
			":fregistro" => $datos["fecha"]
		));
	}

	function obtenerDatos($id){
		$sql="SELECT ID, NOMBRE, SUELDO, EDAD, FREGISTRO FROM T_CRUD WHERE ID=:id";
		$query=Conexion::conectar()->prepare($sql);
		$query->execute(array(":id" => $id));
		return $query->fetch();
	}

	function actualizarDatos($datos){
		$sql = "UPDATE T_CRUD SET 
		NOMBRE=:nombre, 
		SUELDO=:sueldo, 
		EDAD=:edad, 
		FREGISTRO=:fregistro WHERE
		ID=:id";
		$query=Conexion::conectar()->prepare($sql);

		return $query->execute(array(
			":nombre" => $datos["nombre"],
			":sueldo" => $datos["sueldo"],
			":edad" => $datos["edad"],
			":fregistro" => $datos["fecha"],
			":id" =>$datos["id"]
		));
	}

	function eliminarDatos($id){
		$sql="DELETE FROM T_CRUD WHERE ID=:id";
		$query=Conexion::conectar()->prepare($sql);
		return $query->execute(array(":id" => $id));
	}
}