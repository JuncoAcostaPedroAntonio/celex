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
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<b>Lista de alumnos</b>
				</h4>
			</div>
			<div class="panel-body">
				<div Class="tabla">
					<center>
						<div class="row">
						<div class="col-md-offset-1 col-md-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<select class="form-control" id="s_estado" onchange="tabla_administracion()">
									<option value="0">Todos los alumnos</option>
										<?php 
										foreach ($estados as $value) {
												echo "<option value=".$value['id'].">".$value['estado']."</option>";
											}
										?>
								</select>
							</div>
						</div>
					</div>
					<hr>
						<table id="t_alumnos" class="table table-condensed table-hover display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Grupo</th>
									<th>Módulo</th>
									<th>Nivel</th>
									<th>Correo</th>
									<th>Telefono</th>
									<th>Adeudo</th>
									<th>Pagar</th>
								</tr>
							</thead>
							<tbody id="tbody_user">
								<?php
								foreach ($alumnos as $value)
								{
									echo '<tr id="tr'.$value['id_alumno'].'">';
									echo '<td align="center">'.$value['id_alumno'].'</td>';
									echo '<td>'.$value['nombre'].'</td>';
									echo '<td align="center">'.$value['grupo'].'</td>';
									echo '<td>'.$value['modulo'].'</td>';
									echo '<td align="center">'.$value['nivel'].'</td>';
									echo '<td>'.$value['correo'].'</td>';
									echo '<td>'.$value['telefono'].'</td>';
									echo '<td align="center"> $'.$value['cuenta'].'</td>';
									echo "<td><center><button id='".$value['id_alumno']."' name='".$value['correo']."' class='btn btn-success' onClick='pagar_a(this.id,this.name)'><i class='fa fa-usd'></button></center></td>";
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
			

