<?php


class UsuariosM extends ConexionBD{


	public function IniciarSession($tabla, $datos){

		$usuario = ConexionBD::cBD()->real_escape_string($datos['user']);

		$query = ConexionBD::cBD()->query("SELECT * FROM $tabla where rut_user = '$usuario' ");

		$row = $query->fetch_array();

		return $row;

	} // fin iniciar session


	public function MatricularALumnosM($tabla, $datos, $tabla2, $tabla3){


				$rutAlu = ConexionBD::cBD()->real_escape_string(trim($datos['rutAlu']));
				$nombreAlu = ConexionBD::cBD()->real_escape_string(trim(ucwords($datos['nombreAlu'])));
				$apellidoPAlu = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['apellidoPAlu'])));
				$ApellidoMAlu = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['ApellidoMAlu'])));
				$FechaNAlu = ConexionBD::cBD()->real_escape_string(trim($datos['FechaNAlu']));
				$sexoAlu = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['sexoAlu'])));
				$comunaAlu = ConexionBD::cBD()->real_escape_string(trim($datos['comunaAlu']));
				$regionAlu = ConexionBD::cBD()->real_escape_string(trim($datos['regionAlu']));
				$direccionAlu = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['direccionAlu'])));
				$numeroDAlu = ConexionBD::cBD()->real_escape_string(trim($datos['numeroDAlu']));
				$correoAlu = ConexionBD::cBD()->real_escape_string(trim($datos['correoAlu']));
				$numeroTAlu = ConexionBD::cBD()->real_escape_string(trim($datos['numeroTAlu']));
				$rutApo = ConexionBD::cBD()->real_escape_string(trim($datos['rutApo']));
				$nombresApo = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['nombresApo'])));
				$apellidoPApo = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['apellidoPApo'])));
				$apellidoMAlu = ConexionBD::cBD()->real_escape_string(ucwords(trim($datos['apellidoMAlu'])));
				$correoApo = ConexionBD::cBD()->real_escape_string(trim($datos['correoApo']));
				$numeroTApo = ConexionBD::cBD()->real_escape_string(trim($datos['numeroTApo']));



		$query = ConexionBD::cBD()->query("INSERT INTO $tabla values('$rutAlu', '$nombreAlu', '$apellidoPAlu', '$ApellidoMAlu', '$FechaNAlu', '$sexoAlu', '$comunaAlu', '$regionAlu', '$direccionAlu', '$numeroDAlu', '$numeroTAlu', '$correoAlu', '$nombresApo', '$apellidoPApo', '$apellidoMAlu', '$rutApo', '$correoApo', '$numeroTApo') ");

		$query2 = ConexionBD::cBD()->query("INSERT INTO $tabla2 values('$rutAlu', '$nombreAlu', '$apellidoPAlu', '$ApellidoMAlu', '$rutApo')");

		$query3 = ConexionBD::cBD()->query("INSERT INTO $tabla3 values('$rutAlu', MD5('123456'), '$nombreAlu', '$apellidoPAlu', '$correoAlu', 'Alumno')");	


			if ($query == true) { $resulado1 = "OK"; }else{ $resulado1 = "ERROR"; }

			if ($query2 == true) { $resulado2 = "OK"; }else{ $resulado2 = "ERROR"; }

			if ($query3 == true) { $resulado3 = "OK"; }else{ $resulado3 = "ERROR"; }		

		$devolver = array("matricula" => $resulado1, "alumno" => $resulado2, "user" => $resulado3);

		return $devolver;




	} // fin matricular alumnos


	public function DatosUsuarioAlumnosM($rut){

		$query = ConexionBD::cBD()->query("SELECT * FROM sis_matriculas 
				INNER JOIN sis_alumnos ON sis_matriculas.rut_alu_mts = sis_alumnos.rut_alu
				INNER JOIN sis_datos_curso ON sis_matriculas.rut_alu_mts = sis_datos_curso.rut_alu_datos
				INNER JOIN sis_docentes ON sis_datos_curso.rut_docente_datos = sis_docentes.rut_docente_doc
				WHERE sis_matriculas.rut_alu_mts = '$rut' ");

		$row = $query->fetch_array();

		return $row;


	}// fin DatosUsuarioAlumnosM


	public function DatosUsuarioDocentesM($rut){

		$query = ConexionBD::cBD()->query("SELECT * FROM sis_docentes  
				INNER JOIN sis_datos_curso ON sis_docentes.rut_docente_doc = sis_datos_curso.rut_docente_datos
				INNER JOIN sis_cursos ON sis_docentes.rut_docente_doc = sis_cursos.profesor_jefe_curso
				WHERE sis_docentes.rut_docente_doc = '$rut' ");

		$row = $query->fetch_array();

		return $row;


	}// FIN DatosUsuarioDocentesM	


	public function datosdosM($array){

		$ape = $array['apellido'];
		$nombre = $array['nombre'];

		$query = ConexionBD::cBD()->query("INSERT INTO datos values('', '$ape', '$nombre' ) ");


		return $query;


	}// FIN DatosUsuarioDocentesM		


} // fin clase
