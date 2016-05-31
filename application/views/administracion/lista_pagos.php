<script type="text/javascript">
	$(document).ready(function(){
   		$('#t_pagos').DataTable();
	});
</script>
<br>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<b>Lista de Pagos</b>
			</h4>
		</div>
		<div class="panel-body">
			<div Class="col-md-12 tabla">
				<center>
					<table id="t_pagos" class="table table-condensed table-hover display" cellspacing="0">
						<thead>
							<tr>
							    <th>Nombre Alumno</th>
							    <th>Descripción</th>
							    <th>Fecha</th>
								<th>Inversión</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody id="tbody_user">
					    	<?php
						    	foreach ($pagos as $value)
								{
									echo '<tr id="tr'.$value['id'].'">';
									echo '<td>'.$value['nombre'].'</td>';
									echo '<td>'.$value['descripcion'].'</td>';
									echo '<td>'.$value['fecha'].'</td>';
									echo '<td>$'.$value['inversion'].'</td>';
									echo '<td><center><button id="'.$value['id'].'" class="btn btn-danger eliminar_pago"><i class="glyphicon glyphicon-remove"></button></center></td>';
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
<div>
    
</div>