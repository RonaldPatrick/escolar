<div class="container-fluid">
    <div class="col-12">
    <div class="callout callout-micss-black">
      <h5><i class="fas fa-list-ul"></i> LISTA DE DOCENTES</h5>
 <!--      This page has been enhanced for printing. Click the print button at the bottom of the invoice to test. -->
    </div>
  </div>
</div>

<?php $query = ConexionBD::cBD()->query("SELECT * FROM sis_docentes ");  ?>

<div class="container-fluid">

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>R.U.T</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Comuna</th>
                    <th>Region</th>
                    <th>Correo</th>
                    <th>Titulo</th>
                    <th>Asignatura</th>
                  </tr>
                  </thead>


                  <tbody>

                  	<?php foreach ($query as $key => $value): ?>
                  		
                   <tr>
                    <td><?php echo $value['rut_docente_doc'] ?></td>
                    <td><?php echo $value['nombre_docente_doc'] ?></td>
                    <td><?php echo $value['apellido_p_doc']." ".$value['apellido_m_doc'] ?></td>
                    <td><?php echo $value['region_docente_doc'] ?></td>
                    <td><?php echo $value['region_docente_doc'] ?></td>
                    <td><?php echo $value['correo_docente_doc'] ?></td>
                    <td><?php echo $value['titulo_docente_doc'] ?></td>
                    <td><?php echo $value['asignatura_principal_doc'] ?></td>
                  </tr>

                  	<?php endforeach ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
