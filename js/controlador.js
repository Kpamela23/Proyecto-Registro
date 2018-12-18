$("#btn-agregar-alumno").click(function(){
	var parametros=`tweet=${$("#txt-tweet").val()}&hashtags=${$("#txt-hashtags").val()}&usuario=${$("#slc-usuario").val()}`;
	console.log(parametros);
	$.ajax({
		url:"ajax/tweets.php?opcion=2",
		method:"POST",
		dataType:"json",
		data:parametros,
		success:function(respuesta){
			console.log(respuesta);
			$("#tweets").html(
				`<div class="row component text-left">
					<div class="col-lg-2">  
						<img src = "${respuesta.usuario.urlImagen}" class="img-fluid rounded-circle img-thumbnail">
					</div>
					<div class="col-lg-10">
						<b>${respuesta.usuario.nombre}</b> ${respuesta.usuario.usuario}
						<div class="tweet-content">
							${respuesta.tweet}
							<div>
								<small class="blue-text">${respuesta.hashtags}</small>
							</div>
						</div>
					</div>
				</div>`+
				$("#tweets").html()
			);
		},
		error:function(error){
			console.error(error);
			$("#tweets").append(error.responseText);
		}
	});
});

