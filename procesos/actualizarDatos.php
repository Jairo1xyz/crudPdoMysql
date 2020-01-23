<?php

require_once '../crud/Crud.php';

$datos = array(
	'nombre' => $_POST['nombreu'],
	'sueldo' => $_POST['sueldou'],
	'edad' => $_POST['edadu'],
	'fecha' => $_POST['fechau'],
	'id' => $_POST['id']
);
$obj=new Crud();
echo $obj->actualizarDatos($datos);