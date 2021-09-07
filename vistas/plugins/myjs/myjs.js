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
  datos.append('correo', $('#correoD').val());
  datos.append('enviar', $('#enviar').val());


  console.log(datos.get('correo'));

  $.ajax({

  	type: "post",
  	url: "http://localhost/proyecto/ajax/Ajaxregistro.php",
  	data: datos,
  	processData: false,
  	contentType:false,
  	success: function (res){

      //$('#resp').html(respuesta);
      console.log(res);

      if (res == "ok") {

        $('.toastrDefaultSuccess').ready(function() {
        toastr.success('Registro exitoso')
        });
      }else if(res == "existe"){ 

            $('.toastrDefaultWarning').ready(function() {
          toastr.warning('el usuario ya se encuentra registrado')
            });

      }else{

    $('.toastrDefaultError').ready(function() {
      toastr.error('Error al registrar')
    });
      }

  	}


  });
  
}