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
			<center><a class=" btn btn-primary " href="#">Nuevo Usuario</a></center>
		</div>
		<div Class="tabla col-md-8 col-md-offset-1">
			<br><br>
			<center>
				<table id="t_usuarios" class="table table-condensed table-hover display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Id usuario</th>
							<th>Nombre usuario</th>
							<th>Correo</th>
							<th>Departamento</th>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach ($usuarios as $value)
					{
						echo '<tr>';
						echo '<td>'.$value['id_usuario'].'</td>';
						echo '<td>'.$value['nombre'].'</td>';
						echo '<td>'.$value['correo'].'</td>';
						echo '<td>'.$value['departamento'].'</td>';
						echo '</tr>';
					}
					?>
					</tbody>
				</table>
			</center>
		</div>
	</div>