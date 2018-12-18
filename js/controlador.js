$("#btn-agregar").click(function(){
	var parametros=`usuario=${$("#Usuario").val()}&password=${$("#Password").val()}&tipoUsuario=${$("#Tipo").val()}&nombre=${$("#Nombre").val()}&carrera=${$("#Carrera").val()}&centro=${$("#CE").val()}`;
	console.log(parametros);
	$.ajax({
		url:"ajax/usuarios.php",
		method:"POST",
		dataType:"json",
		data:parametros,
		success:function(respuesta){
			console.log(respuesta);
			
		},
		error:function(error){
			console.error(error);
		}
	});
});

$("#btn-adicionar-alumno").click(function(){
	$("#Tipo").val("ALUMNO");
});

$("#btn-adicionar-docente").click(function(){
	$("#Tipo").val("DOCENTE");
	
});

$("#btn-adicionar-seccion").click(function(){
	var parametros=`codigo=${$("#Codigo").val()}&asignatura=${$("#Asignatura").val()}&unidadValorativa=${$("#UV").val()}&nombre=${$("#Requi").val()}&carrera=${$("#Car").val()}&centro=${$("#Cent").val()}`;
	console.log(parametros);
	$.ajax({
		url:"ajax/secciones.php",
		method:"POST",
		dataType:"json",
		data:parametros,
		success:function(respuesta){
			console.log(respuesta);
			
		},
		error:function(error){
			console.error(error);
		}
	});
});
