<?php

require_once '../crud/Crud.php';

$id=$_POST['id'];

$obj=new Crud();
echo $obj->eliminarDatos($id);