<div Class="tabla">
	<br><br>
	<center>
		<table id="t_usuarios" class="table table-condensed table-hover display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Grupo</th>
					<th>Modulo</th>
					<th>Nivel</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Pagar</th>
					<th>Editar</th>
					<th>Eliminar</th>
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
					echo '<td>'.$value['telefono'].'</td>';
					echo '<td>'.$value['correo'].'</td>';
					echo '<td><center><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" class="btn btn-success pagar"><i class="fa fa-usd"></button></center></td>';
					echo '<td><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" type="button" data-toggle="modal" data-target="#modal_editar" class="btn btn-primary modificar"><span class="glyphicon glyphicon-pencil"></button></td>';
					echo '<td><center><button id="'.$value['id_usuario'].'" name="'.$value['correo'].'" class="btn btn-danger eliminar_alumno"><i class="glyphicon glyphicon-remove"></button></center></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</center>
</div>