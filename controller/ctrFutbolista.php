<?php
include_once("model/clsFutbolista.php");
class ctrFutbolista
{
	private $Futbolista;

	public function __construct()
	{
		$this->Futbolista = new clsFutbolista();
	}

	public function Index()
	{
		return $this->Futbolista->Listar();
	}

	public function Agregar($nombre, $edad, $posicion, $pais, $club)
	{
		$this->Futbolista->set("nombre", $nombre);
		$this->Futbolista->set("edad", $edad);
		$this->Futbolista->set("posicion", $posicion);
		$this->Futbolista->set("pais", $pais);
		$this->Futbolista->set("club", $club);
		$this->Futbolista->Insertar();
	}

	public function Eliminar($id)
	{
		$this->Futbolista->set("id", $id);
		$this->Futbolista->Eliminar();
	}

	public function Ver($id)
	{
		$this->Futbolista->set("id", $id);
 		return $this->Futbolista->Ver();
	}

	public function Editar($id, $nombre, $edad, $posicion, $pais, $club)
	{
		$this->Futbolista->set("id", $id);
		$this->Futbolista->set("nombre", $nombre);
		$this->Futbolista->set("edad", $edad);
		$this->Futbolista->set("posicion", $posicion);
		$this->Futbolista->set("pais", $pais);
		$this->Futbolista->set("club", $club);
		$this->Futbolista->Editar();
	}
}
?>
