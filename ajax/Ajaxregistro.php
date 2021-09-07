<?php  

require '../modelos/conexion.BD.php';

require '../controladores/UsuariosC.php';
require '../modelos/UsuariosM.php';




if (isset($_POST['enviar'])) {
	

	$array = array('nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'correo' => $_POST['correo']);

		$respuesta = UsuariosC::datosdosC($array);

		if ($respuesta == "ok") {
			echo 'ok';
		}elseif($respuesta == "existe"){
			echo 'existe';
		}else{
			echo 'no';
		}


}




?>