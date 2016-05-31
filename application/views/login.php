<html>
<head>
	<meta charset="UTF-8"> 
	<title>SAES CELEX</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/mijava.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>sweetalert/dist/sweetalert.css"/>
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
	<div class="container col-md-12 col-xs-12 contenedor-gral">
		<div class="container-Logo col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-1">
			<img src="<?php echo base_url();?>images/ipn-logo.png" width="100%" heigth="100%">
		</div>
		<div class="col-md-4 col-xs-4">
			<h2 class="form-signin-heading"><center>Iniciar Sesion</center></h2>
			<input type="email" id="correo" class="form-control" placeholder="correo" required autofocus>
			<br>
			<input type="password" id="contrasena" class="form-control" placeholder="contraseña" required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" id="b_login">Entrar</button>
		</div>
		<div class="container-Logo col-md-3 col-xs-3">
			<img src="<?php echo base_url();?>images/ipn-logo.png" width="100%" heigth="100%">
		</div>
	</div> <!-- /container -->
</body>
</html>