<div class="container">
	



	

  <div class="row mb-5">
    <div class="col-12">
    <div class="callout callout-micss-black">
      <h5><i class="fas fa-list-ul"></i> REGISTRAR DOCENTE</h5>
 <!--      This page has been enhanced for printing. Click the print button at the bottom of the invoice to test. -->
    </div>
  </div>
</div>



  <form action="" method="POST">
    

        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">DATOS DEL DOCENTE</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">R.U.N</label>
                    <input type="text" class="form-control" name="rut" id="rut_doc" placeholder="12345678-9" required="" onkeyup="formatCliente1(this)" minlength="8" maxlength="11">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" name="nombre" id="nombre-doc" placeholder="Juan Daniel" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_p" id="apellido_p_doc" placeholder="Perez" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellido_m" id="apellido_m_doc" placeholder="Correa" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha Nacimiento</label>
                    <input type="text" class="form-control" name="fecha_n" id="fecha_n_doc" placeholder="01/01/1975" required="" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo_doc" name="" id="Seleccione" required="">
                      <option value="" disabled="" selected="">Seleccione</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select>
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>            


            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Comuna</label>
                  <select class="form-control select2" name="comuna" id="comuna_doc" style="width: 100%;" required="">
                    <option selected="selected" disabled="">Seleccione</option>
   
                    <?php $region = ConexionBD::cBD()->query("SELECT * FROM sis_ciudades "); ?>
                    <?php foreach ($region as $key => $fila): ?>
                      <option value="<?php echo $fila['nombre_comuna'] ?>"><?php echo $fila['nombre_comuna'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Region</label>
                  <select class="form-control select2" name="region" id="region_doc" style="width: 100%;" required="">
                    <option selected="selected" disabled="">Seleccione</option>
       
                    <?php $region = ConexionBD::cBD()->query("SELECT distinct nombre_region FROM sis_ciudades "); ?>
                    <?php foreach ($region as $key => $fila): ?>
                      <option value="<?php echo $fila['nombre_region'] ?>"><?php echo $fila['nombre_region'] ?></option>
                    <?php endforeach ?>

                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>



            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion_doc" placeholder="Calle #123" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo_doc" placeholder="micorreo@gmail.com" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>            


            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titulo Profesional</label>
                    <input type="text" class="form-control" name="titulo" id="titulo_doc" placeholder="ingenieria en...">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asignatura</label>
                    <input type="text" class="form-control" name="asignatura" id="asignatura_doc" placeholder="Historia">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>


          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->



        <!--  -->
        <!--  -->
        <!--  -->


 

        <!--  -->
        <!--  -->
        <!--  -->

        <div class="row">
          <div class="col-12">
            <button type="submit" name="guardardocente" id="guardardocente" class="btn btn-primary">Guardar</button>
          </div>
        </div>
  </form>



</div>
