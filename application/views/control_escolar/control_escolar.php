<style type="text/css">
	.input-group{
		margin: 5px;
	}
	.btn{
		margin: 5px;
	}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
    		$('#t_alumnos').DataTable();
		});
	</script>
	<br>
	<div class="container">
		<div class="panel-group" id="acordeon_padre" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a class="" role="button" data-toggle="collapse" data-parent="#acordeon_padre" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<b>Registrar Nuevo Estudiante</b>
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						<form id="nuevo_estud" accept-charset="utf-8" novalidate="novalidate">
							<div class="row">
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Nombre(s)">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Apellido Paterno">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Apellido Materno">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
										<input type="date" class="form-control" placeholder="Fecha Nacimiento">
									</div>
								</div>
								<div class="col-md-5">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="RFC">
									</div>
								</div>
								<div class="col-md-2">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Sexo">
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="text" class="form-control" placeholder="Telefono">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="varchar" class="form-control" placeholder="Email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Ultimo Grado De Estudios">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Institucion De Egreso">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Anio de Egreso">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Como se Entero">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
										<input type="varchar" class="form-control" placeholder="Inversion">
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-2 col-md-offset-4">
									<button type="button" name="registar" class="btn btn-lg btn-primary btn-block">Guardar</button>
								</div>
								<div class="col-md-2">
									<button type="reset" class="btn btn-lg btn-primary btn-block">Limpiar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="" role="button" data-toggle="collapse" data-parent="#acordeon_padre" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
							<b>Lista de Alumnos</b>
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						<div Class="tabla">
							<br><br>
							<center>
								<table id="t_alumnos" class="table table-condensed table-hover display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Id</th>
											<th>Nombre</th>
											<th>Grupo</th>
											<th>Modulo</th>
											<th>Nivel</th>
											<th>Correo</th>
											<th>Telefono</th>
											<th>editar</th>
											<th>eliminar</th>
										</tr>
									</thead>
									<tbody id="tbody_user">
										<?php
										foreach ($alumnos as $value)
										{
											echo '<tr id="tr'.$value['id_alumno'].'">';
											echo '<td>'.$value['id_alumno'].'</td>';
											echo '<td>'.$value['nombre'].'</td>';
											echo '<td>'.$value['grupo'].'</td>';
											echo '<td>'.$value['modulo'].'</td>';
											echo '<td>'.$value['nivel'].'</td>';
											echo '<td>'.$value['correo'].'</td>';
											echo '<td>'.$value['telefono'].'</td>';
											echo '<td><button id="'.$value['id_alumno'].'" name="'.$value['correo'].'" type="button" data-toggle="modal" data-target="#modal_editar" class="btn btn-primary modificar_ce"><span class="glyphicon glyphicon-pencil"></button></td>';
    										echo '<td><center><button id="'.$value['id_alumno'].'" name="'.$value['correo'].'" class="btn btn-danger eliminar_ce"><i class="glyphicon glyphicon-remove"></button></center></td>';
    										echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

