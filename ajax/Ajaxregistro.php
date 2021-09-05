<?php  

require '../modelos/conexion.BD.php';

require '../controladores/UsuariosC.php';
require '../modelos/UsuariosM.php';




if (isset($_POST['enviar'])) {
	

	$array = array('nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'] );

		$respuesta = UsuariosC::datosdosC($array);

		if ($respuesta == "ok") {
			echo '<br> <div class="alert alert-danger text-center">Bien</div>';
		}else{
			echo '<br> <div class="alert alert-danger text-center">Mal</div>';
		}


}




?>