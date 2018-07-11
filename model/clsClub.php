<?php
include_once("DB/DBAbstractModel_MYSQL.php");
class clsClub extends DBAbstractModel
{
	private $id;
	private $nombre;
	private $estadio;

	public function __construct(){}
	public function __destruct(){}

	public function set($atributo, $contenido)
	{
		$this->atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function Listar()
	{
		$this->query = "SELECT * FROM club";
		return $this->get_results_from_query();
	}

	public function Ver()
	{
		$this->query = "SELECT * FROM club WHERE id = '{$this->id}' LIMIT 1";
		return $this->get_results_from_query()[0];
	}

	public function Insertar()
	{
		$this->query = "INSERT INTO club(nombre, estadio) VALUES ('{$this->nombre}', '{$this->estadio}')";
		return $this->execute_single_query();
	}

	public function Eliminar()
	{
		$this->query = "DELETE FROM club WHERE (id = '{$this->id}')";
  	return $this->execute_single_query();
	}

	public function Editar()
	{
		$this->query = "UPDATE club SET nombre = '{$this->nombre}', estadio = '{$this->estadio}' WHERE id = '{$this->id}'";
  	return $this->execute_single_query();
	}
}

?>
