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
?>
<form action="Ver.php" method="POST">

</form>
