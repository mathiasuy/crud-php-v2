<?php
	$controlador = new ctrFutbolista();
	if(isset($_GET['id'])) 
	{
		$resultado = $controlador->Ver($_GET['id']);
	} 
	else 
	{
		header('Location: ?cargar=inicio');
	}

	if (isset($_POST['btnEliminar'])) 
	{
		$controlador->Eliminar($_GET['id']);	
		header('Location: ?cargar=inicio');
	}
	
?>
<div>
	<h1 class="col-sm-9 col-md-offset-2 h1agregar">¿Esta Seguro de Eliminar?</h1>
	<center><label>Futbolista  <?php echo $resultado['nombre']; ?></label></center>
	<center><label>Edad  <?php echo $resultado['edad']; ?></label></center>
	<center><label>Posicion  <?php echo $resultado['posicion']; ?></label></center>
	<center><label>País  <?php echo $resultado['pais']; ?></label></center>
	<center><label>Club  <?php echo $resultado['club']; ?></label></center>
	<center><label>Estadio  <?php echo $resultado['estadio']; ?></label></center>
	<br><br>
	<form action="" method="POST" onsubmit="return confirmation()">
		<center><input type="submit" class="btn btn-primary btn-sm" name="btnEliminar" value="Eliminar"/></center>
	</form>
</div>