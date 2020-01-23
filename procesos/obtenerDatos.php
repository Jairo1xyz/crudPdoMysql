<?php

require_once '../crud/Crud.php';

$id=$_POST['id'];

$obj=new Crud();
echo json_encode($obj->obtenerDatos($id));