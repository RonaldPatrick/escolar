<div class="container">
	


<div class="row">
	

<div class="col-12">
	<h3>Registero docente</h3>
</div>





<div class="row">
	<div class="col-12">
		
		<div id="resp" ></div>
	</div>
</div>

<form  method="post">
	
	
	<input type="text" name="nombre" id="nombre"><br>

	
	<input type="text" name="apellido" id="apellido"><br><br>

	<button class="" id="enviar">Enviar</button><br>


</form>


</div>



</div>


<script>
  
$(document).ready(function(){


});

$('#enviar').click(function(e){


enviar();
e.preventDefault();
});



function enviar(){

  var datos = new FormData();

  datos.append('nombre', $('#nombre').val());
  datos.append('apellido', $('#apellido').val());
  datos.append('enviar', $('#enviar').val());


  console.log(datos.get('nombre'));

  $.ajax({

  	type: "post",
  	url: "http://localhost/proyecto/ajax/Ajaxregistro.php",
  	data: datos,
  	processData: false,
  	contentType:false,
  	success: function (respuesta){

  		$('#resp').html(respuesta);

  	}


  });
  
}

</script>