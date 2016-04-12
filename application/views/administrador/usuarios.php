<style type="text/css">
	.btn {
		margin:5px;
	}
</style>
<div class="contenido">
	<div class="container">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
		<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#t_usuarios').DataTable();
			});
		</script>
		<div class="contenido_depto">
			<h1><center>Administracion de Usuarios</center></h1></div><br>
			<center>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_editar">
        			Nuevo Usuario
    			</button>
			</center>
		</div>
		<div Class="tabla container">
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
							<th>editar</th>
							<th>eliminar</th>
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
						echo '<td><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" class="btn btn-primary modificar"><i class"glyphicon glyphicon-pencil"></button></td>';
						echo '<td><center><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" class="btn btn-danger eliminar"><i class="glyphicon glyphicon-remove"></button></center></td>';
						echo '</tr>';
					}
					?>
					</tbody>
				</table>
			</center>
		</div>
	</div>
