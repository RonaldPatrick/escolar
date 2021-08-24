<?php


class CursosC{


	public function LlamarCursosC(){


		$tabla = "sis_cursos";
		$tabla2 = "sis_docentes";

		$respuesta = CursosM::LlamarCursosM($tabla, $tabla2);

		return $respuesta;


	}


}