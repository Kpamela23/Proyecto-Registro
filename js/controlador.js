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
	var horaInicio = parseInt($("#codigo-seccion").val());
	var horaFinal = horaInicio + 100;	
	
	var datosClase = $("#asignatura-seccion").val().split(","); 	

	console.log(datosClase);

	var parametros=`codigo=${$("#codigo-seccion").val()}&codigoAsignatura=${datosClase[0]}&asignatura=${datosClase[1]}&uv=${$("#uv-seccion").val()}&horaInicio=${horaInicio}&horaFinal=${horaFinal}&centro=${$("#centro-seccion").val()}&dias=${$("#dias-seccion").val()}&opcion=3`;
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


$("#clase").change(function(){
	var parametros=`asignatura=${$("#clase").val()}`;
	$.ajax({
		url:"ajax/matricularAsignatura.php",
		method:"POST",
		dataType:"json",
		data:parametros,
		success:function(respuesta){
			$("#seccion").html('<option value="0">seleccione</option>');
			for(var i=0;i<respuesta.length;i++){
				$("#seccion").append(`<option value="${respuesta[i].codigo}">${respuesta[i].codigo}-${respuesta[i].uv}-${respuesta[i].dias}</option>`);
			}
			console.log(respuesta);			
		},
		error:function(error){
			console.error(error);
		}	
	});
});