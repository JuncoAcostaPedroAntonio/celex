
<!DOCTYPE html>
<html>
<head>
	<title>
		Registro Estudiantes
	</title>
</head>
<body>
	<style type="text/css">
		.input-group{
			margin: 2px;
		}
		.btn{
			margin: 2px;
		}
	</style>
	<br>
	<div class="content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<b>Registrar Nuevo Estudiante</b>
				</div>
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
					</form><br><br>
					<footer id="ce-footer" align="center" style="background-color: #adadad;">
	<div class="container">
		<div class="row">
		    <div class="col-sm-2">
		        <img src="<?php echo base_url();?>images/Logoce.png" heigth="200" width="250">
		    </div>
			<div id="ce-footer1" class="col-sm-10 colmd-10">
				<div class="ce-column">
					<span class="ce-copyright">
						<p>Centro de Educación Continua Unidad Cajeme.</p>
						<p>Blvd. Rodolfo Elías Calles No.215 Col. Cortinas, Cd. Obregón, Sonora, México, C.P. 85160</p>
						<p>Tel: (644) - <strong>412 0298</strong> y (644) - <strong>444 6622</strong></p>
						<a href="http://www.ceccajeme.ipn.mx"><p style="font-style: italic;">http://www.ceccajeme.ipn.mx</p></a>
					</span>
				</div>
			</div>
		</div>
	</div>
</footer>
				</div>
			</div>
		</div>
	<div>	
</body>
</html>