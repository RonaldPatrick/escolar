<?php  

require '../modelos/conexion.BD.php';

require '../controladores/UsuariosC.php';
require '../modelos/UsuariosM.php';




if (isset($_POST['enviar'])) {
	

	$array = array('nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'] );

		$respuesta = UsuariosC::datosdosC($array);

		if ($respuesta == "ok") {
			echo 'ok';
		}else{
			echo 'no';
		}


}




?>