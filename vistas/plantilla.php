<?php session_start(); ?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema | Escolar</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/daterangepicker/daterangepicker.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/toastr/toastr.min.css">

  <!-- CSS PERSONALIZADO -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/csspersonalizado/miscsspersonalizados.css">

  <!-- DATA TABLE -->
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/proyecto/vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- jquey -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>

<script type="text/javascript">
        function formatCliente(cliente)
        {cliente.value=cliente.value.replace(/[.-]/g, '')
        .replace( /^(\d{1,3})(\d{3})(\d{3})(\w{1})$/, '$1$2$3-$4')}
        function formatCliente1(rut)
        {rut.value=rut.value.replace(/[.-]/g, '')
        .replace( /^(\d{1,3})(\d{3})(\d{3})(\w{1})$/, '$1$2$3-$4')}
</script> 

<body class="hold-transition dark-mode sidebar-mini layout-fixed">




 <?php

 if(isset($_SESSION["Ingresar"]) && $_SESSION["Ingresar"] == true){

  echo '<div class="wrapper">';

  include "paginas/cabecera.php";

  include "paginas/menu.php";


echo '<div class="content-wrapper pt-5 pb-5">';


  $url = array();

  if(isset($_GET["url"])){

    $url = explode("/", $_GET["url"]);

    if($url[0] == "inicio" || $url[0] == "salir" || $url[0] == "cursos" || $url[0] == "perfil-alumno" || $url[0] == "perfil-docente"  || $url[0] == "info-curso" || $url[0] == "matriculas" || $url[0] == "materias" || $url[0] == "registro-docente" || $url[0] == "lista-docentes" ){    

      include "paginas/".$url[0].".php";  



    }elseif($url[0] != "inicio" || $url[0] != "salir" || $url[0] != "cursos" || $url[0] != "perfil-alumno" || $url[0] == "perfil-docente" || $url[0] != "info-curso" || $url[0] != "matriculas" || $url[0] != "materias" || $url[0] != "registro-docente" || $url[0] != "lista-docentes" ){

      include "paginas/error404.php";

    }    
   

  }else{

    include "paginas/inicio.php";

  }


echo '</div>';
 



 }else if(isset($_GET["url"])){

  if($_GET["url"] == "ingresar"){

    include "paginas/ingresar.php";

  }else{
    include "paginas/ingresar.php";
  }


 }else{

   include "paginas/ingresar.php";

 }

  

 ?>



<?php include "paginas/footer.php"; ?>