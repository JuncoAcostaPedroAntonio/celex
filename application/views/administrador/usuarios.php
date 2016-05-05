<style type="text/css">
.btn {
	margin:5px;
}
</style>
<br><br>
<div class="container">
<script type="text/javascript">
$(document).ready(function(){
    $('#t_usuarios').DataTable();
});
</script>

	<div class="panel-group" id="acordeon_padre" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a class="" role="button" data-toggle="collapse" data-parent="#acordeon_padre" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<b>Administración de Usuarios</b>
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<div>
						<center>
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_usuario">
								Nuevo Usuario
							</button>
						</center>
					</div>
					<div Class="tabla">
						<br><br>
						<center>
							<table id="t_usuarios" class="table table-condensed table-hover display" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Usuario</th>
										<th>Nombre</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Departamento</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody id="tbody_user">
									<?php
									foreach ($usuarios as $value)
									{
										echo '<tr id="tr'.$value['id_usuario'].'">';
										echo '<td> clave </td>';
										echo '<td>'.$value['nombre'].'</td>';
										echo '<td>'.$value['telefono'].'</td>';
										echo '<td>'.$value['correo'].'</td>';
										echo '<td>'.$value['departamento'].'</td>';
										echo '<td><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" type="button"  class="btn btn-primary modificar"><span class="glyphicon glyphicon-pencil"></button></td>';
										echo '<td><center><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" class="btn btn-danger eliminar"><i class="glyphicon glyphicon-remove"></button></center></td>';
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
										<!--data-toggle="modal" data-target="#modal_editar"-->