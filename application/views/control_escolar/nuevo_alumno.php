<style>
	.input-group{
		margin:3px;
	}
</style>
<br>
<div class="content">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<b>Registrar nuevo alumno</b>
			</div>
			<div class="panel-body">
				<form id="nuevo_estud" accept-charset="utf-8">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_nombre" placeholder="Nombre(s)  -  Apellido paterno  -  Apellido materno" required autofocus>
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								<input type="date" class="form-control" id="i_fecha" max="2005-12-31" placeholder="Fecha nacimiento" required autofocus>
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<select id="i_sexo" class="form-control" required autofocus>
									<option value="0">Sexo</option>
									<option value="1">Femenino</option>
									<option value="2">Masculino</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_rfc" placeholder="RFC" required autofocus>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input type="text" class="form-control" id="i_telefono" placeholder="Teléfono" maxlength="10" minlength="10" required autofocus>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="varchar" class="form-control" id="i_correo" placeholder="Email" required autofocus>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_ultest" placeholder="Último grado de estudios" required autofocus>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_instegre" placeholder="Institución de egreso" required autofocus>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_anioegreso" placeholder="Año de egreso" required autofocus>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="i_entero" placeholder="¿Cómo se enteró del curso?" required autofocus>
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
								<input type="text" class="form-control" id="i_inversion" placeholder="Inversión" required autofocus>
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<select class="form-control" id="s_grupo" onchange="mostrar_info_grupo_insc()" required autofocus>
									<option value="0">Seleccione el grupo</option>
										<?php 
											foreach ($l_grupos as $value) {
												echo "<option value=".$value['id'].">".$value['nombre']."</option>";
											}
										?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="g_modulo" placeholder="Módulo" disabled>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="g_nivel" placeholder="Nivel" disabled>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="g_horario" placeholder="Horario" disabled>
							</div>
						</div>
					</div>
					
					
					<hr>
					<div class="row">
						<div class="col-md-2 col-md-offset-4">
							<button type="button" class="btn btn-lg btn-primary btn-block insc_alumno">Guardar</button>
						</div>
						<div class="col-md-2">
							<button type="reset" class="btn btn-lg btn-primary btn-block limpiar">Limpiar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>