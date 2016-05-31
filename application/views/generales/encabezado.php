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
	
	<!-- Libreria Sweet Alert2-->
	<script type="text/javascript" src="<?php echo base_url();?>sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>sweetalert/dist/sweetalert.css"/>

	<!-- for IE support Sweet Alert2
	<script src="bower_components/es6-promise-polyfill/promise.min.js"></script>
	-->
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
				<div class="col-xs-5 col-md-5 botones">
					
				</div>
				<div class="col-xs-3 col-md-3 sesion">
					<b><?php echo $this->session->userdata('nombre')?></b><br>
					<b><?php echo $this->session->userdata('departamento'); ?></b><br>
					<a class="sc" href="<?php echo base_url()?>c_login/cerrarsesion"><b>Cerrar sesión</b></a>
				</div>
				<div class="col-xs-1 col-md-1 imagen_user">
					<img src="<?php echo base_url();?>images/user_img.JPG" width="100%">
				</div>
			</div>
		</div>
	</div>
	
	

