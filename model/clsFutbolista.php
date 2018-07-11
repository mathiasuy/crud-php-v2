<?php
include_once("DB/DbAbstractModel_MYSQL.php");
class clsFutbolista extends DBAbstractModel
{
	private $id;
	private $nombre;
	private $edad;
	private $posicion;
	private $pais;
	private $club;

	public function __construct(){}
	public function __destruct(){}

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
		$this->query = "SELECT f.id, f.nombre as nombre, f.edad as edad, p.nombre as posicion, pa.nombre as pais, c.nombre as club, c.estadio as estadio
				FROM futbolista f INNER JOIN posicion p ON f.id_posicion = p.id INNER JOIN pais pa ON f.id_pais = pa.id INNER JOIN club c ON f.id_club = c.id";
		return $this->get_results_from_query();
	}

	public function Ver()
	{
		$this->query = "SELECT f.id as id, f.nombre as nombre, f.edad as edad, p.nombre as posicion, pa.nombre as pais, c.nombre as club, c.estadio
		FROM futbolista f INNER JOIN posicion p ON f.id_posicion = p.id INNER JOIN pais pa ON f.id_pais = pa.id INNER JOIN club c ON f.id_club = c.id
		WHERE f.id = '{$this->id}' LIMIT 1";
		return $this->get_results_from_query()[0];
	}

	public function Insertar()
	{
		$this->query = "INSERT INTO futbolista(nombre, edad, id_posicion, id_pais, id_club) VALUES ('{$this->nombre}', '{$this->edad}', '{$this->posicion}', '{$this->pais}', '{$this->club}')";
		return $this->execute_single_query();
	}

	public function Editar()
	{
		$this->query = "UPDATE futbolista SET nombre = '{$this->nombre}', edad = '{$this->edad}', id_posicion = '{$this->posicion}', id_pais = '{$this->pais}', id_club = '{$this->club}'
		WHERE id = '{$this->id}'";// AND p.id = '$this->id_posicion' AND pa.id_pais = '$this->id_pais' AND c.id_club = '$this->id_club'
  	return $this->execute_single_query();
	}

	public function Eliminar()
	{
		$this->query = "DELETE FROM futbolista WHERE (id = '{$this->id}')";
  	return $this->execute_single_query();
	}
}
?>
