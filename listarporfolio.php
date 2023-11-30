    <!-- Header -->
    <?php include 'header.php';
    ?>
<?php
include_once "config.php";
$folio = $_GET['id'];
$sentencia = $base_de_datos->query("SELECT * FROM  ficha WHERE folio = '$folio';");
$fichas = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

	<div class="col-xs-12">
		
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Folio</th>
					<th>CURP</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Ver</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($fichas as $ficha){ ?>
				<tr>
					<td><?php echo $ficha->folio ?></td>
                    <td><?php echo $ficha->curp ?></td>
                    <?php
                        $sen = $base_de_datos->query("SELECT * FROM  datos_personales_alumno WHERE id_ficha = '$ficha->id';");
                        $fis = $sen->fetchAll(PDO::FETCH_OBJ);
                        foreach($fis as $fi){ 
                    ?>
                    <td><?php echo $fi->Nombre ?></td>
                    <td><?php echo $fi->ApellidoP ?></td>
                    <td><?php echo $fi->ApellidoM ?></td>
					<td><a class="btn btn-info" href="<?php echo "ficha.php?id=" . $ficha->id?>"><i class="fa fa-print"></i></a></td>
				</tr>
				<?php } } ?>
			</tbody>
		</table>
	</div>
	<style>
        .footer-distributed {
        position: relative;
        bottom: 0;
        background-color: #124bbd;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 10px 50px 10px 50px;
        margin-top: 308px;
        }
    </style>
    <?php
include 'footer.php';
?>
