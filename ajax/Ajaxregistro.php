<?php  

require '../modelos/conexion.BD.php';

require '../controladores/UsuariosC.php';
require '../modelos/UsuariosM.php';




if (isset($_POST['enviar'])) {
	


	if ($_POST['rut'] == "" || $_POST['nombre'] == "" || $_POST['apellido_p'] == "" || $_POST['apellido_m'] == "" || $_POST['fecha_n'] == "" || $_POST['sexo'] == "" || $_POST['comuna'] == "" || $_POST['region'] == "" || $_POST['direccion'] == "" || $_POST['correo'] == "" || $_POST['titulo'] == "" || $_POST['asignatura'] == "") {


		echo "datos-requeridos";

	}else{

			$array = array('rut' => $_POST['rut'], 'nombre' => $_POST['nombre'], 'apellido_p' => $_POST['apellido_p'], 'apellido_m' => $_POST['apellido_m'], 'fecha_n' => $_POST['fecha_n'], 'sexo' => $_POST['sexo'], 'comuna' => $_POST['comuna'], 'region' => $_POST['region'], 'direccion' => $_POST['direccion'], 'correo' => $_POST['correo'], 'titulo' => $_POST['titulo'], 'asignatura' => $_POST['asignatura']);

				$respuesta = UsuariosC::RegistrarDocenteC($array);

				if ($respuesta == "ok") {
					echo 'ok';
				}elseif($respuesta == "existe"){
					echo 'existe';
				}else{
					echo 'no';
				}


	}



}





if ($_REQUEST['op'] == 'obtenercodigo') {

	$rutdc = base64_decode($_POST['rutt']);

	$respuesta = UsuariosC::GetrutDocenteC($rutdc);

	echo $respuesta;

	//echo base64_decode($_POST['rutt']);	
	//UsuariosC::GetrutDocenteC();

}


?>