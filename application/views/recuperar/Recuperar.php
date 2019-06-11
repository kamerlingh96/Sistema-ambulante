<html lang="es">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>estilos/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/login/css/main.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/user/css/style-login.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 img-fondo">
				<img src="<?= base_url() ?>uploads/system/DJI_0252.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="linea-roja">

			</div>
		</div>
		<div class="row">
			<div class="col-12 img-center">
				<img src="<?= base_url() ?>uploads/system/logoinspector.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<div class="row formulario">
			<div class="col-12">
				<form action="<?= base_url() ?>Recuperar_controller/recuperar" method="post" name="edicionCorrecta" class="form-center">
					<div class="label-input">
						<div class="row">
							<div class="col-12 input">
								<input type="email" name="email" value="" required class="input100" placeholder="Correo">
							</div>
						</div>
						<br>
					</div>
					<div class="btn-form-center">
						<input type="submit" name="" value="Recuperar Contraseña">
					</div>
				</form>
				<br>
				<br>
				<br>
				<div class="recuperar">
					<a href="<?= base_url()?>"><p><span>Regresar</span></p></a>
				</div>
				<br>
				<br>

			</div>
		</div>
		<div class="row footer">
			<div class="linea-roja">

			</div>
			<div class="col-md-12 text-footer">
				<h4>H. AYUNTAMIENTO DE CARMEN - COORDINACÓN DE GOBERNACIÓN MUNICIPAL</h4>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?= base_url() ?>estilos/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

	<script src="<?= base_url() ?>estilos/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

	<?php
	if (isset($_GET['error'])) {
		$error = $_GET['error'];
		if ($error = true) {?>

			<script type="text/javascript">
			window.onload = function() {
					alert("Correo invalido");
				};
			</script>

			<?php

		}
	}


	 ?>
</body>

</html>
