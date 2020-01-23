function mostrar(){
	$.ajax({
		type:"POST",
		url:"",
		success:function(r){
			
		}
	});
}


function eliminarDatos(){
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