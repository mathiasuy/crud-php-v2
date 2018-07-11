<?php
class Enrutador
{
	public function CargarVista($vista)
	{
		switch ($vista)
		{
			case 'Editar':
				include_once('view/' . $vista . '.php');
				break;
			case 'Eliminar':
				include_once('view/' . $vista . '.php');
				break;
			case 'Agregar':
				include_once('view/' . $vista . '.php');
				break;
			case 'inicio':
				include_once('view/' . $vista . '.php');
				break;
			default:
				include_once('view/error.php');
				break;
		}
	}

	public function ValidarVista($variable)
	{
		if (empty($variable))
		{
			include_once("view/inicio.php");
		}
		else
		{
			return true;
		}
	}
}

?>
