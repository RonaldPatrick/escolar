<?php $fila = CursosC::LlamarCursosC(); ?>
<div class="container ">

  <div class="row mb-5">
    <div class="col-12">
    <div class="callout callout-micss-black">
      <h5><i class="fas fa-list-ul"></i> LISTA DE CURSOS</h5>
 <!--      This page has been enhanced for printing. Click the print button at the bottom of the invoice to test. -->
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $fila['cod_curso'] ?></h3>

          <p>Profesor Jefe: <?php echo $fila['nombre_docente_doc']." ". $fila['apellido_m_doc'] ?></p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-bookmarks"></i>
        </div>
        <a href="info-curso/<?php echo $fila['cod_curso'] ?>" class="small-box-footer">ver curso <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>


</div>
