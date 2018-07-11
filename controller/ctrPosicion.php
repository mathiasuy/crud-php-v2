<?php
include_once("model/clsPosicion.php");
class ctrPosicion
{
	private $Posicion;

	public function __construct()
	{
		$this->Posicion = new clsPosicion();
	}

	public function Index()
	{
		$resultado = $this->Posicion->Listar();
		return $resultado;
	}

	public function Agregar($nombre)
	{
		$this->Posicion->setNombre($nombre);
		return $this->Posicion->Insertar();
	}

	public function Ver($id)
	{
		$this->Posicion->set("id", $id);
		return $this->Posicion->Ver();
	}

	public function Eliminar($id)
	{
		$this->Posicion->setId($id);
		$this->Posicion->Eliminar();
	}

	public function Editar($id)
	{
		$this->Posicion->setId($id);
		$this->Posicion->Editar();
	}
}
?>
