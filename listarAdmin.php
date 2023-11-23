<?php include_once "header.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM  ficha;");
$fichas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Vuelos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Modelo</th>
					<th>Capacidad de maletas</th>
					<th>ID de piloto</th>
					<th>Capacidad de pasajeros</th>
					<th>Tipo de avión</th>
					<th>Lugar salida</th>
					<th>Destino</th>
					<th>Peso máximo</th>
					<th>Altura máxima</th>
					<th>Disponible</th>
					<th>Precio</th>
					<th>Ver</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($fichas as $ficha){ ?>
				<tr>
					<td><?php echo $ficha->id ?></td>
					<td><?php echo $ficha->modelo ?></td>
					<td><?php echo $ficha->Capacidad_maletas ?></td>
					<td><?php echo $ficha->id_empleado ?></td>
					<td><?php echo $ficha->capacidad_pasajeros ?></td>
					<td><?php echo $ficha->tipo_avion ?></td>
					<td><?php echo $ficha->lugar_salida ?></td>
					<td><?php echo $ficha->destino ?></td>
					<td><?php echo $ficha->peso_max ?></td>
					<td><?php echo $ficha->altura_max ?></td>
					<td><?php echo $ficha->disponible ?></td>
					<td><?php echo $ficha->precio ?></td>
					<td><a class="btn btn-warning" href="<?php echo "IDficha.php?id=" . $ficha->id?>"><i class="fa fa-edit"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>