<?php
include_once("DB/DBAbstractModel_MYSQL.php");
class clsPosicion extends DBAbstractModel
{
	private $id;
	private $nombre;

	public function __construct(){}
	public function __destruct(){}
	public function Ver(){}
	public function Editar(){}

	public function set($atributo, $contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function Listar()
	{
		$this->query = "SELECT * FROM posicion";
		return $this->get_results_from_query();
	}

	public function Insertar()
	{
		$this->query = "INSERT INTO posicion(nombre) VALUES ('{$this->nombre}')";
		return $this->execute_single_query();
	}

	public function Eliminar()
	{
		$this->query = "DELETE FROM posicion WHERE (id = '{$this->id}')";
  	return $this->execute_single_query();
	}
}


?>
