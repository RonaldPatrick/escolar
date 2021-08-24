<?php


class ConexionBD{


		public function cBD(){

			$db = new mysqli('localhost', 'root', '', 'sistema_escolar');

			$db->query("SET NAMES 'utf8'");

			return $db;
	}

}