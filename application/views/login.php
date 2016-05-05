<html>
<head>
	<meta charset="UTF-8"> 
	<title>SAES CELEX</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/mijava.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>alertify/lib/alertify.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>alertify/themes/alertify.default.css" />
	<style type="text/css">
	body {
		background: #711D3E;
		color: white;
	}

	img {
		margin-top: 10px;
	}

	</style>
</head>
<body>
	<div class="row">
		<div class="col-xs-3 col-md-3">
			<img src="<?php echo base_url();?>images/ipn-logo3.jpg" >
		</div>
		<div class="col-xs-6 col-md-6">
			<h1><center><b>Sistema de Control Escolar</b></center></h1>
		</div>
		<div class="col-xs-3 col-md-3">
			<img src="<?php echo base_url();?>images/ipn-logo2.jpg">
		</div>
	</div>
	<br><br><br><br>
	<div class="container col-md-12 contenedor-gral">
		<div class="container-Logo col-md-3 col-md-offset-1">
			<img src="<?php echo base_url();?>images/ipn-logo.png" width="100%" heigth="100%">
		</div>
		<form class="formulario col-md-4" action="<?php echo base_url();?>c_login/validar_login" method="post">
			<h2 class="form-signin-heading"><center>Iniciar Sesion</center></h2>
			<input type="email" name="correo" class="form-control" placeholder="correo" required autofocus>
			<br>
			<input type="password" name="contrasena" class="form-control" placeholder="contraseña" required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			<!--<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>->
			<!--<a class="btn btn-lg btn-primary btn-block" href="<?php echo base_url(); ?>general/inicio">Entrar</a>-->
		</form>
		<div class="container-Logo col-md-3">
			<img src="<?php echo base_url();?>images/ipn-logo.png" width="100%" heigth="100%">
		</div>
	</div> <!-- /container -->
</body>
</html>