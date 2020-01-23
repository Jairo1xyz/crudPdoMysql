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