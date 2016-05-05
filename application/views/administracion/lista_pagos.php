<div>
    <table id="t_usuarios" class="table table-condensed table-hover display" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Id. Alumno</th>
			    <th>Nombre Alumno</th>
			    <th>Descripcion</th>
				<th>Inversion</th>
				<th>Fecha</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
			<tbody id="tbody_user">
		    	<?php
			    	foreach ($pagos as $value)
					{
						echo '<tr>';
						echo '<td>'.$value['id_alumno'].'</td>';
						echo '<td>'.$value['nombre'].'</td>';
						echo '<td>'.$value['desccripcion'].'</td>';
						echo '<td>'.$value['inversion'].'</td>';
						echo '<td>'.$value['fecha'].'</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
</div>