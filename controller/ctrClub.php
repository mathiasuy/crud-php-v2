<?php
include_once("model/clsClub.php");
class ctrClub
{
	private $Club;

	public function __construct()
	{
		$this->Club = new clsClub();
	}

	public function Index()
	{
		return $this->Club->Listar();
	}

	public function Agregar($nombre)
	{
		$this->Club->setNombre($nombre);
		return $this->Club->Insertar();
	}

	public function Ver($id)
	{
		$this->Club->set("id", $id);
		return $this->Club->Ver();
	}

	public function Eliminar($id)
	{
		$this->Club->setId($id);
		$this->Club->Eliminar();
	}

	public function Editar($id)
	{
		$this->Club->setId($id);
		$this->Club->Editar();
	}
}
?>
