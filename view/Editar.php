<?php
	$controlador = new ctrFutbolista();
	$controlador1 = new ctrPosicion();
	$controlador2 = new ctrPais();
	$controlador3 = new ctrClub();
	$resultado1 = $controlador1->Index();
	$resultado2 = $controlador2->Index();
	$resultado3 = $controlador3->Index();

	if(isset($_POST['btnEditar']))
	{
		$controlador->Editar($_GET['id'], $_POST['nombre'], $_POST['edad'], $_POST['posicion'],
							 $_POST['pais'], $_POST['club']);

		header('Location: ?cargar=inicio');
	}


	if(isset($_GET['id']))
	{
		$resultado = $controlador->Ver($_GET['id']);
	}
	else
	{
		header('Location: ?cargar=inicio');
	}
?>
<h1 class="col-sm-10 col-md-offset-3 h1agregar">Editar Futbolista</h1>
<form class="form-horizontal col-sm-10 col-md-offset-2" name="" action="" method="POST">
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $resultado['id']; ?>"/>

		<label class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Edad</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name="edad" value="<?php echo $resultado['edad']; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Posicion</label>
		<div class="col-sm-4">
			<p class="form-control-static"><?php echo $resultado['posicion']; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">(*)</label>
		<div class="col-sm-4">
			<select class="form-control" name="posicion" value="">
				<option value="" >Seleccione la Posicion para Editar</option>
				<?php
					foreach($resultado1 as $row)
					{
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
			<p class="form-control-static"><?php echo $resultado['pais']; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">(*)</label>
		<div class="col-sm-4">
			<select class="form-control" name="pais" value="">
				<option value="">Seleccione el Pais para Editar</option>
				<?php
					foreach($resultado2 as $row)
					{
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
			<p class="form-control-static"><?php echo $resultado['club']; ?></p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">(*)</label>
		<div class="col-sm-4">
			<select class="form-control" name="club" value="">
				<option value="">Seleccione el Club para Editar</option>
				<?php
					foreach($resultado3 as $row)
					{
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


	<br>
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-8">
	      	<button type="submit" class="btn btn-primary btn-lg col-md-offset-2" name="btnEditar">Editar</button>
	    </div>
    </div>
</form>
