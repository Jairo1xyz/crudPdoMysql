function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data: "id="+id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			
			$('#id').val(r['ID']);
			$('#nombreu').val(r['NOMBRE']);
			$('#sueldou').val(r['SUELDO']);
			$('#edadu').val(r['EDAD']);
			$('#fechau').val(r['FREGISTRO']);
		}
	});
}

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data: $('#frminsertu').serialize(),
		success:function(r){
			if(r==1){
				mostrar();
				swal("¡Actualización exitosa!", ":D", "success");
			} else{
				swal("No se pudo actualizar", "Error", "error");
			}
			

		}
	});
	return false;
}

function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data: $('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				// Limpiar formulario
				$('#frminsert')[0].reset();
				mostrar();
				swal("¡Agregado con éxito!", ":D", "success");
			} else{
				swal("No se pudo agregar", "Error", "error");
			}
			

		}
	});
	return false;
}