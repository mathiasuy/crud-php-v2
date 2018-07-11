<?php
	$controlador = new ctrFutbolista();
	$controlador1 = new ctrPosicion();
	$controlador2 = new ctrPais();
	$controlador3 = new ctrClub();
	$resultado1 = $controlador1->Index();
	$resultado2 = $controlador2->Index();
	$resultado3 = $controlador3->Index();

	if(isset($_POST['btnAgregar']))
	{
		$resultado = $controlador->Agregar($_POST['nombre'], $_POST['edad'],
										   $_POST['posicion'], $_POST['pais'],
										   $_POST['club']);

		if (!$resultado)
		{
			echo "Futbolista Agregado con Exito Revise BD";
			header('Location: ?cargar=inicio');
		}
		else
		{
			alert("Error al Agregar Futbolista Verifique el Codigo.");
		}
	}
?>
<h1 class="col-sm-10 col-md-offset-3 h1agregar">Agregar Futbolista</h1>

<form class="form-horizontal col-sm-10 col-md-offset-2" action="" method="POST">

	<div class="form-group">
		<label class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name="nombre" required/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Edad</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name="edad" minlength="1" maxlength="2" required/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Posicion</label>
		<div class="col-sm-4">
			<select class="form-control" name="posicion" value="">
				<option value="0">Seleccione Posicion</option>
				<?php
					foreach ($resultado1 as $row) {
						if ($row != NULL){
				?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
				<?php
						}
					}
				?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Pais</label>
		<div class="col-sm-4">
			<select class="form-control" name="pais" value="">
				<option value="0">Seleccione Pais</option>
				<?php
					foreach ($resultado2 as $row) {
						if ($row != NULL){
				?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
				<?php
						}
					}
				?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Club</label>
		<div class="col-sm-4">
			<select class="form-control" name="club" value="">
				<option value="0">Seleccione Club</option>
				<?php
					foreach ($resultado3 as $row) {
						if ($row != NULL){
				?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></option>
				<?php
						}
					}
				?>
			</select>
		</div>
	</div>

	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-10">
	      	<button type="submit" class="btn btn-primary btn-lg" name="btnAgregar">Agregar</button>
	    </div>
    </div>
</form>
