<?php

require_once "modelos/conexion.BD.php";

$conexion = new ConexionBD();
$conexion -> cBD();

require_once "controladores/PlantillaC.php";

//usuarios

require "controladores/UsuariosC.php";
require "modelos/UsuariosM.php";

//Cursos

require "controladores/CursosC.php";
require "modelos/CursosM.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();
