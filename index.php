<?php 
include_once("controller/Enrutador.php");
include_once("controller/ctrFutbolista.php");
include_once("controller/ctrPosicion.php");
include_once("controller/ctrPais.php");
include_once("controller/ctrClub.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>index</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<nav class="navbar navbar-inverse ">
		<div class="container">
		    <ul class="nav navbar-nav">
				<li><a href="?cargar=inicio">Inicio</a></li>
				<li><a href="?cargar=Agregar">Agregar</a></li>
			</ul>
		</div>
	</nav>

	<br>

	<div class="container">
		<?php 
			$enrutador = new Enrutador();
			if ($enrutador->ValidarVista($_GET['cargar'])) 
			{
				$enrutador->CargarVista($_GET['cargar']);
			}
		?>
	</div>

	<br><br>

	<footer class="footer1">
		<div class="container">
			<div class="row">
				<p>Futbolistas Ejemplo CRUD PHP.</p>
			</div>
			<div class="div-footer row">

			</div>
		</div>
	</footer>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jsbase.js"></script>
</body>
</html>