<?php

           // Obtener datos de la base de datos
$sql = "SELECT * FROM alumnos WHERE Curp='$curp'";
$result = $conexion->query($sql);

$sql2 = "SELECT * FROM tutores WHERE Curp='$curp'";
$result2 = $conexion->query($sql2);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc() AND $row2 = $result2->fetch_assoc()) {
        echo "<div class='ficha'>";
        echo '<div> <img  height="50" src="ImagesC/DGti.png" class="align-items-start d-flex justify-content-start"/> <p class="align-items-center d-flex justify-content-center">Centro De Bachillerato Tecnológico y de Servicios No.128</p></div>';	
        echo "<center><u><h2>FICHA DE INSCRIPCIÓN DE ALUMNOS</h2></u></center>";
        echo "<div class='align-items-end d-flex justify-content-end me-4'><h6>No.Folio " . $row['No-folio'] . "</h6></div>";
        echo '<div class="align-items-end d-flex justify-content-end me-4"> <img height="100" width="100" src="data:image/jpeg;base64,'.base64_encode($row["Foto"]).'"/></div>';	
        echo "<div class='align-items-start d-flex justify-content-start me-4'><h5><u>DATOS DEL ALUMNO/A</u></h5></div>";
        echo "<div class='row'>";
        echo "<div class='col-6'><P>Apellido(s): " . $row['Apellido-p']." ". $row['Apellido-m'] . "</P></div>";
        echo "<div class='col-6'><P>Nombre(s): " . $row['Nombre']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-4'><P>Fecha de Nacimiento: " . $row['Fec-nac']."</P></div>";
        echo "<div class='col-2'><P>Sexo: " . $row['sexo']."</P></div>";
        echo "<div class='col-3'><P>Peso: " . $row['peso']." Kg.</P></div>";
        echo "<div class='col-3'><P>Altura: " . $row['altura']." M.</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-12'><P>Especialidad: " . $row['especialidad']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-4'><P>Edad: " . $row['Edad']. "</P></div>";
        echo "<div class='col-8'><P>CURP: " . $row['Curp']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-6'><P>Secundaria de procedencia: " . $row['Sec-procedencia']. "</P></div>";
        echo "<div class='col-6'><P>Promedio: " . $row['Prom-sec']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-9'><P>Domicilio: " . $row['Direccion']. "</P></div>";
        echo "<div class='col-3'><P>Código Postal: " . $row['Codigo-p']. "</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-6'><P>Localidad: " . $row['localidad']. "</P></div>";
        echo "<div class='col-3'><P>Teléfono: " . $row['tel']. "</P></div>";
        echo "<div class='col-3'><P>Tel-Movil: " . $row['Num-Cel']. "</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-12'><P>Email: " . $row['Correo-elec']. "</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-12'><P>Ocupación: " . $row['ocupacion']. "</P></div>";
        echo "</div>";



        echo "<br>";
        echo "<div class='align-items-start d-flex justify-content-start me-4'><h5><u>DATOS DEL PADRE/MADRE/TUTOR/A</u></h5></div>";
        echo "<div class='row'>";
        echo "<div class='col-6'><P>Apellido(s): " . $row2['Apellido-p']." ". $row2['Apellido-m'] . "</P></div>";
        echo "<div class='col-6'><P>Nombre(s): " . $row2['Nombres']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-9'><P>Domicilio: " . $row['Direccion']. "</P></div>";
        echo "<div class='col-3'><P>Código Postal: " . $row['Codigo-p']. "</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-6'><P>Tel-Movil: " . $row2['Num-celular']. "</P></div>";
        echo "<div class='col-6'><P>Email: " . $row2['Correo-e']."</P></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-12'><P>Ocupacion: " . $row2['ocupacion']."</P></div>";
        echo "</div>";

        echo '<div class="align-items-center d-flex justify-content-center p-0"> <img height="100" width="2000" src="ImagesC/footer.png"/></div>';	
        echo "</div>";
    }
} else {
    echo "No se encontraron estudiantes en la base de datos.";
}

?>

<center>
<form action="<?php echo "descargar.php?curp=" . $curp ?>" method="post" target="_blank">
<div class="menu-saber">
  <button class="saber" type="submit"><img src="ImagesC/Icon-jaguar2.png" class="saber2"/> Descargar <img src="ImagesC/Icon-jaguar2.png" class="saber2"/></button>
                </div>
</form>