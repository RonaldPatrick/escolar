<?php


class UsuariosC{

	public function IniciarSesion(){


		if (isset($_POST['rut'])) {
			
			$tabla = "sis_user";
			$datos = array("user" => $_POST['rut'], "clave" => $_POST['pass']);

			$resultado = UsuariosM::IniciarSession($tabla, $datos);

			if (isset($resultado['rut_user']) and $resultado['rut_user'] == $_POST['rut'] && $resultado['pass'] == $_POST['pass']) {
				
				$_SESSION['Ingresar'] = true;
				$_SESSION['rut_user'] = $resultado['rut_user'];
				$_SESSION['nombre'] = $resultado['nombre'];
				$_SESSION['apellido'] = $resultado['apellido'];
				$_SESSION['correo'] = $resultado['correo'];
				$_SESSION['roles'] = $resultado['rol'];

				echo '<script>window.location = "inicio";</script>';

			}else{

				echo '<br> <div class="alert alert-danger text-center">Datos Erroneos</div>';
	               

			}

		} // if isset


	} // fin function IniciarSesion



	public function MatricularALumnosC(){

		//echo $_POST['rut_alu'];

		if (isset($_POST['guardarmatricula']) && $_POST['rut_alu'] != "") {
			


			$tabla = "sis_matriculas";
			$tabla2 = "sis_alumnos";
			$tabla3 = "sis_user";

			$datos = array("rutAlu" => $_POST['rut_alu'], "nombreAlu" => $_POST['nombre_alu'], "apellidoPAlu" => $_POST['apellido_p_alu'], "ApellidoMAlu" => $_POST['apellido_m_alu'], "FechaNAlu" => $_POST['fecha_n_alu'], "sexoAlu" => $_POST['sexo_alu'], "comunaAlu" => $_POST['comuna_alu'], "regionAlu" => $_POST['region_alu'], "direccionAlu" => $_POST['direccion_alu'], "numeroDAlu" => $_POST['numero_casa_alu'], "correoAlu" => $_POST['correo_alu'], "numeroTAlu" => $_POST['numero_telefono_alu'], "rutApo" => $_POST['rut_apo'], "nombresApo" => $_POST['nombre_apo'], "apellidoPApo" => $_POST['apellido_p_apo'], "apellidoMAlu" => $_POST['apellido_m_apo'], "correoApo" => $_POST['correo_apo'], "numeroTApo" => $_POST['numero_telefono_apo'] );

			$resultado = UsuariosM::MatricularALumnosM($tabla, $datos, $tabla2, $tabla3);


           return $resultado;

	} // if isset

	}// fin MatricularALumnosC



	public function DatosUsuarioAlumnosC($rut){

		$resultado = UsuariosM::DatosUsuarioAlumnosM($rut);


			return $resultado;		

	}// fin DatosUsuarioAlumnosC


	public function DatosUsuarioDocentesC($rut){

		$resultado = UsuariosM::DatosUsuarioDocentesM($rut);


			return $resultado;		

	}// fin DatosUsuarioDocentesC	



	public function RegistrarDocenteC($array){

		$resultado = UsuariosM::RegistrarDocenteM($array);


			if ($resultado == "ok") {

				return "ok";

			}elseif($resultado == "existe"){

				return "existe";

			}else{

				return "no";

			}

			

	}// fin DatosUsuarioDocentesC		


} // fin clase UsuariosC