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
					<b>Lista de Alumnos</b>
				</h4>
			</div>
			<div class="panel-body">
				<div Class="tabla">
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
									echo '<td><center><button id="'.$value['id_alumno'].'" name="'.$value['correo'].'" class="btn btn-success pagar_a"><i class="fa fa-usd"></button></center></td>';
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
			

