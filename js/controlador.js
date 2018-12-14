$("document").ready(function(){

	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico");
	$.ajax({
		url:"ajax/departamentos.php",
		method:"GET",
		dataType:"json",
		success: function(respuesta){
			$("#depto").append(`<option value=""></option>`);
			for(var i=0; i<respuesta.length;i++)
				$("select[id='depto']").append(`<option value="${respuesta[i].asignatura}">${respuesta[i].asignatura}</option>`);
		},
		error:function(error){
			console.log(error);
		}
    })
})
