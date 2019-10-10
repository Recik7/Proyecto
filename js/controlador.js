$(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico")

	//Obtener los tweets guardados
	$.ajax({
		url:"ajax/productos.php?",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			for (var i=0;i<respuesta.length;i++){
				$("#div-productos").append(
					`<div class="col-4">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-md-6">
                            <div class="card" style="width: 18rem;height: 20rem; margin-bottom: 20px">
                                <img src="img/1.jpg" class="card-img-top" style="margin: 5px; width: 96%; height: 60%">
                            <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        </div>
                    </div>`
				);
			}

		},
		error:function(error){
			console.error(error);
			$("#tweets").append(error.responseText);
		}
	});
});