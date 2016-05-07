<html>
<head>
	<meta charset="UTF-8">
	<title>SAES CELEX</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/mijava.js"></script>
	
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<script type="text/javascript" src="<?php echo base_url();?>alertify/lib/alertify.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>alertify/themes/alertify.default.css" />
	<style type="text/css">
	.encabezado {
		background: #711D3E;
		color: white;
	}
	.row-e {
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.sesion{
		text-align: right;
	}
	.imagen_user img{
		width: 70px;
		height: 80px;
	}
	.logo-celex{
		margin-top: 5px
	}
	.contenido-boton{
		background: #d4d4d4;
	}
	</style>
</head>
<body>
	<div class="encabezado">
		<div class="container">
			<div class="row row-e">
				<div class="col-xs-3 col-md-3 logo-celex">
					<img src="<?php echo base_url();?>images/ipn-logo3.jpg" heigth="100%">
				</div>
				<div class="col-xs-6 col-md-6 botones">
					
				</div>
				<div class="col-xs-2 col-md-2 sesion">
					<b>Nombre de usuario</b><br>
					<b>Departamento</b><br>
					<a class="sc" href="<?php echo base_url()?>general/index"><b>Cerrar sesion</b></a>
				</div>
				<div class="col-xs-1 col-md-1 imagen_user">
					<img src="<?php echo base_url();?>images/user_img.JPG" width="100%">
				</div>
			</div>
		</div>
	</div>
	
	

