$(document).ready(function(){


});

$('#guardardocente').click(function(e){

enviar();
e.preventDefault();

});



function enviar(){

  var datos = new FormData();

  datos.append('rut', $('#rut_doc').val());
  datos.append('nombre', $('#nombre-doc').val());
  datos.append('apellido_p', $('#apellido_p_doc').val());
  datos.append('apellido_m', $('#apellido_m_doc').val());
  datos.append('fecha_n', $('#fecha_n_doc').val());
  datos.append('sexo', $('#sexo_doc').val());
  datos.append('comuna', $('#comuna_doc').val());
  datos.append('region', $('#region_doc').val());
  datos.append('direccion', $('#direccion_doc').val());
  datos.append('correo', $('#correo_doc').val());
  datos.append('titulo', $('#titulo_doc').val());
  datos.append('asignatura', $('#asignatura_doc').val());
  datos.append('enviar', $('#guardardocente').val());


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

      }else if(res == "datos-requeridos"){ 


            $('.toastrDefaultInfo').ready(function() {
              toastr.info('Todos los datos son nesesarios')
            });

      }else{

        $('.toastrDefaultError').ready(function() {
          toastr.error('Error al registrar')
        });

      }


  	}


  });
  
}