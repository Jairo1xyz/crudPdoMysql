<?php

require_once "../crud/Crud.php";
$obj=new Crud();
$datos=$obj->mostrarDatos();

$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>Nombre</td>
					<td>Sueldo</td>
					<td>Edad</td>
					<td>Fecha Registro</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';

$datosTabla='';

foreach ($datos as $key => $value) {
	$datosTabla.='<tr>
					<td>'.$value['NOMBRE'].'</td>
					<td>'.$value['SUELDO'].'</td>
					<td>'.$value['EDAD'].'</td>
					<td>'.$value['FREGISTRO'].'</td>
					<td>
						<span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['ID'].')" data-toggle="modal" data-target="#actualizarModal">
							<i class="fas fa-edit"></i>
						</span>
						
					</td>
					<td>
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['ID'].')">
							<li class="fas fa-trash-alt"></li>
						</span>
					</td>
				</tr>';
}

echo $tabla.$datosTabla.'</tbody>
					</table>';