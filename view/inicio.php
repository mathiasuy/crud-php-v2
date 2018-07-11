<?php
	$controlador = new ctrFutbolista();
	$resultado = $controlador->Index();
//	var_dump($resultado[0]['nombre']);
?>
<h1 class="col-sm-10 col-md-offset-3 h1agregar">Listado de Futbolistas</h1>
<div>
	<table class="table table-hover">
		<thead>
			<th>NOMBRE</th>
			<th>EDAD</th>
			<th>POSICION</th>
			<th>PAIS</th>
			<th>CLUB</th>
			<th>ESTADIO</th>
			<th COLSPAN="2">OPCIONES</th>
		</thead>
		<tbody>
			<?php foreach ($resultado as $row) {
			?>
			<tr>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['edad']; ?></td>
				<td><?php echo $row['posicion']; ?></td>
				<td><?php echo $row['pais']; ?></td>
				<td><?php echo $row['club']; ?></td>
				<td><?php echo $row['estadio']; ?></td>
				<td>
					<a href="?cargar=Editar&id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
				</td>
				<td>
					<a href="?cargar=Eliminar&id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
