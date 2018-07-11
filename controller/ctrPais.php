<?php
include_once("model/clsPais.php");
class ctrPais
{
	private $Pais;

	public function __construct()
	{
		$this->Pais = new clsPais();
	}

	public function Index()
	{
		return $this->Pais->Listar();
	}



	public function Agregar($nombre)
	{
		$this->Pais->setNombre($nombre);
		return $this->Pais->Insertar();
	}


	public function Ver($id)
	{
		$this->Pais->set("id", $id);
		return $this->Pais->Ver();
	}


	public function Eliminar($id)
	{
		$this->Pais->setId($id);
		$this->Pais->Eliminar();
	}


	public function Editar($id)
	{
		$this->Pais->setId($id);
		$this->Pais->Editar();
	}
}
?>
