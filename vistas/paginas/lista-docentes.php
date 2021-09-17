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
						<th>Accion</th>
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
							<td>

									<?php $rut = base64_encode($value['rut_docente_doc']); ?> 

									<!-- <button type="button" class="btn btn-warning" name="editar" data-toggle="modal" data-target="#modal-edit" onclick="obtenerut(<?php echo $rut ?>)"><i class="fas fa-edit"></i></button> -->


									<button type='button' class='btn btn-warning' name='editar' data-toggle='modal' data-target='#modal-edit' onclick='obtenercodigo(<?php echo "  \"$rut\" " ?>)'><i class='fas fa-edit'></i></button>


									<button type="button" id="btneliminar" class="btn btn-danger" name="eliminar" data-rut="<?php echo $value['rut_docente_doc'] ?>" data-nom="<?php echo $value['nombre_docente_doc'] ?>" data-ape="<?php echo $value['apellido_p_doc']." ".$value['apellido_m_doc'] ?>" data-toggle="modal" data-target="#modal-eliminar"><i class="fas fa-trash-alt"></i></button>

                 	

								<script>
									$(document).on("click", "#btneliminar", function(){

										var rut =$(this).data('rut');
										var nombre =$(this).data('nom');
										var apellido =$(this).data('ape');

										$("#rut").val(rut);
										$("#nombre").val(nombre);
										$("#apellido").val(apellido);

										$("#rutt").text(rut);
										$("#nombree").html(nombre);
										$("#apellidoo").html(apellido);
									})
								</script>


							</td>
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


<!-- EDITAR  -->

<div class="modal fade bd-example-modal-xl" id="modal-edit">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Editar Usuarios</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>editar&hellip;</p>
				<input type="text" id="nombredocecnte">
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-warning">Actualizar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<!-- ELIMINAR -->












<div class="modal fade" id="modal-eliminar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Eliminar Usuario:</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				R.U.T <p><div id=""></div></p>

				<p id=""></p>
				<input type="text" id="">
				<input type="hidden" id="nombre">
				<input type="hidden" id="apellido">

				
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger">Eliminar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
