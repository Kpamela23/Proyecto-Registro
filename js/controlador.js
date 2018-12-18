$("#btn-agregar-estudiante").click(function(){
	var parametros=`usuario=${$("#Usuario").val()}&password=${$("#Password").val()}&nombre=${$("#Nombre").val()}&carrera=${$("#Carrera").val()}&centro=${$("#CE").val()}&opcion=1`;
	console.log(parametros);
	$.ajax({
		url:"ajax/usuarios.php",
		method:"POST",
		dataType:"json",
		data: parametros,
		success:function(respuesta){
			console.log(respuesta);
		},
		error:function(error){
			console.error(error);
		}
	});
});

$("#adicionar-maestro").click(function(){
	var parametros=`usuario=${$("#codigo-maestro").val()}&password=${$("#pass").val()}&nombre=${$("#nombre-e").val()}&carrera=${$("#carrera").val()}&centro=${$("#centro-e").val()}&opcion=2`;
	console.log(parametros);
	$.ajax({
		url:"ajax/usuarios.php",
		method:"POST",
		dataType:"json",
		data: parametros,
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

$("#btn-agregar-seccion").click(function(){
	var parametros=`codigo=${$("#codigo-seccion").val()}&asignatura=${$("#asignatura-seccion").val()}&unidadValorativa=${$("#uv-seccion").val()}&hora=${$("#hora-seccion").val()}&centro=${$("#centro-seccion").val()}&opcion=3`;
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
