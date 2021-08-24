<?php


class CursosM extends ConexionBD{


	public function LlamarCursosM($tabla, $tabla2){

		$query = ConexionBD::cBD()->query("SELECT * FROM $tabla inner join $tabla2 ");

		$row = $query->fetch_array(MYSQLI_ASSOC);

		return $row;


	}

}