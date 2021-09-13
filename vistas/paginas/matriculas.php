<div class="container">
	

  <div class="row mb-5">
    <div class="col-12">
    <div class="callout callout-micss-black">
      <h5><i class="fas fa-list-ul"></i> MATRICULA</h5>
 <!--      This page has been enhanced for printing. Click the print button at the bottom of the invoice to test. -->
    </div>
  </div>
</div>

<div class="row">
	<div class="col-12">
		<?php $datos = UsuariosC::MatricularALumnosC(); ?>

    <?php if (isset($datos['matricula']) and $datos['matricula'] == "OK"): ?>

      <!-- VALIDAR MATRICULA -->
      
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Perfecto</h5>
            La matricula se ha registrado correctamente
      </div>

    <?php elseif(isset($datos['matricula']) and $datos['matricula'] == "ERROR"): ?>  
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Alerta Error 01</h5>
          La matricula no se ha registrado consulte al administrador
      </div>
    <?php endif ?>

      <!-- VALIDAR TABLA ALUMNO -->

    <?php if (isset($datos['alumno']) and $datos['alumno'] == "ERROR"): ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Alerta Error 02</h5>
          No se ha incorporado el alumno a la tabla de alumnos Consulte al administrador
      </div>      
    <?php endif ?>

      <!-- VALIDAR TABLA USER -->

    <?php if (isset($datos['user']) and $datos['user'] == "ERROR"): ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Alerta Error 03</h5>
          No se pudo registrar un usuario al alumno consulte al administrador
      </div>      
    <?php endif ?>


	</div>
</div>

	<form action="" method="POST">
		

        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">DATOS DEL ALMUNO</h3>

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
                    <input type="text" class="form-control" name="rut_alu" id="exampleInputEmail1" placeholder="12345678-9" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" name="nombre_alu" id="exampleInputEmail1" placeholder="Juan Alfredo" required="">
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
                    <input type="text" class="form-control" name="apellido_p_alu" id="exampleInputEmail1" placeholder="Cortes" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellido_m_alu" id="exampleInputEmail1" placeholder="Tapia" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha Nacimiento</label>
                    <input type="text" class="form-control" name="fecha_n_alu" id="fecha_n_alu" placeholder="01/01/1975" required="" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sexo</label>
                    <select class="form-control" name="sexo_alu" id="sexo_alu" name="" id="Seleccione" required="">
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
                  <select class="form-control select2" name="comuna_alu" style="width: 100%;" required="">
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
                  <select class="form-control select2" name="region_alu" style="width: 100%;" required="">
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
                    <input type="text" class="form-control" name="direccion_alu" id="exampleInputEmail1" placeholder="Calle Eleuterio Ramirez" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Numero Casa/depa</label>
                    <input type="text" class="form-control" name="numero_casa_alu" id="exampleInputEmail1" placeholder="1234" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>            


            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" name="correo_alu" id="exampleInputEmail1" placeholder="micorreo@gmail.com">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Numero Telefono</label>
                    <input type="text" class="form-control" name="numero_telefono_alu" id="exampleInputEmail1" placeholder="(9)12345678">
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


        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">DATOS DEL APODERADO</h3>

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
                    <input type="text" class="form-control" name="rut_apo" id="exampleInputEmail1" placeholder="12345678-9" required="">
                  </div>
                <!-- /.form-group -->
              </div>
                <!-- /.form-group -->
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" name="nombre_apo" id="exampleInputEmail1" placeholder="Maria Angelica" required="">
                  </div>
                <!-- /.form-group -->
              </div>
                <!-- /.form-group -->

              <!-- /.col -->
            </div>
            <!-- /.row -->


            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apelldio Materno</label>
                    <input type="text" class="form-control" name="apellido_p_apo" id="exampleInputEmail1" placeholder="Vera" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_m_apo" id="exampleInputEmail1" placeholder="Tapia" required="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <div class="row">
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" name="correo_apo" id="exampleInputEmail1" placeholder="micorreo@gmail.com">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Numero Telefono</label>
                    <input type="text" class="form-control" name="numero_telefono_apo" id="exampleInputEmail1" placeholder="(9)12345678">
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

        <div class="row">
        	<div class="col-12">
        		<button type="submit" name="guardarmatricula" class="btn btn-primary">Guardar</button>
        	</div>
        </div>
	</form>




</div>