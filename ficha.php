<?php 

$conexion=mysqli_connect('localhost','root','','cbtis114');

$id= $_GET["id"];

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="shortcut icon" href="imagenes/silueta.jpg" type="image/x-icon">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIB8j/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIB8j/yAfI/8AAAAAAAAAAAAAAAAAAAAAAAAAACAfI/8gHyP/IB8j/wAAAAAAAAAAAAAAAAAAAAAAAAAAIB8j/zmTzv8gHyP/IB8j/wAAAAAAAAAAAAAAACAfI////////////1NTVHEgHyP/AAAAAAAAAAAAAAAAAAAAAECw+/8gHyP/IB8j/yAfI/8gHyP/IB8j/yAfI///////////////////////IB8j/wAAAAAAAAAAAAAAACAfI/9AsPv/IB8j/yAfI/8gHyP/IB8j//7+/v///////////yAfI///////IB8j/wAAAAAAAAAAAAAAACAfI/89o+f/QLD7/zN4p/8gHyP/IB8j/yAfI///////+/v7////////////IB8j/yAfI/8gHyP/AAAAAAAAAAAgHyP/QLD7/z2i5v9AsPv/IB8j//////8XFhv//////yAfI/8AAAL/JBzt/yAfI/9JSEv/IB8j/wAAAAAAAAAAIB8j/0Cw+/9Btf//QLD7/yAfI/////////////////8gHyP/JBzt/yMdvf+BgIL//////yAfI/8gHyP/AAAAAGRjZVJAsPv/QLH8/0Cw+/8gHSD///////////9AsPv/QLD7/zeKw/8gHyP/N4rD/0Cw+/9AsPv/QLD7/yAfI/8gHyP/QLD7/0Cw+/9AsPv/QLD7/0Cw+/9AsPv/QLD7/0Cw+/9AsPv/QLD7/0Cw+/8mOkr/QbT+/x8UE/8gHyP/IB8j/0Cw+/9AsPv/QLD7/0Cw+/8fGhv/QLD7/0Cw+/9AsPv/QLD7/x4NAP8gHyP/IB8j/0Cw+/8gHyP/AAAAACAfI/8jHir/QLD7/zeJv/9AsPv/IB8j/x8UD/9AsPv/QLD7/0Cw+/8iJy//QLD7/0Cw+/8eEQ7/AAAAAAAAAAAAAAAAIB8j/0Cw+/9AsPv/IB8j/yAaFv8gHyP/HhIK/0Cw+/9AsPv/QLD7/0Cw+/9AsPv/IB8j/wAAAAAAAAAAAAAAAAAAAAAgHyP/QLD7/0Cw+/8gHyP/IB8j/0Cw+/9AsPv/QLD7/0Cw+/8gHyP/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB8eIv9AsPv/QLD7/0Cw+/8fGxv/KlFu/yAfI/8gHyP/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIB8j/yAfI/8gHyP/IB8j/yAfI/8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9/8AAOfHAADDiwAAwAMAAIAHAAAAAwAAAAMAAAABAACAAAAAAAAAAAABAAAAAwAAgAMAAMAPAADgHwAA8H8AAA==" rel="icon" type="image/x-icon" />
    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="JSCano/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <!-- Header -->
        <?php include 'header.php';
    ?>

    <title>CBTIS NO.114</title>

        <style>


        .ficha {
            background-color:#fff;
            color:black;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>

</head>
<body>
<?php

// Obtener datos de la base de datos
$sql = "SELECT * FROM ficha WHERE id='$id'";
$result = $conexion->query($sql);
while ($row = $result->fetch_assoc()){
    $id_ficha = $row['id'];
            echo "<div class='ficha'>";
            echo "<div><h3>No.Folio:  " . $row['folio'] . "</h3></div>";
            echo "<div><h5>Fecha:  " . $row['fecha'] . "</h5></div>";
            echo "<br><br>";
            echo "<div><h4>CURP:  " . $row['curp'] . "</h4></div>";
            
            $sql2 = "SELECT * FROM datos_personales_alumno WHERE id_ficha='$id'";
            $result2 = $conexion->query($sql2);
            while ($r = $result2->fetch_assoc()){
                echo "<div><h5>Nombre completo del aspirante:  " . $r['Nombre'] . " " . $r['ApellidoP'] . "" . $r['ApellidoM']."</h5></div>";
                echo "<div><h5>Nacionalidad:  " . $r['nacionalidad'] . "</h5></div>";
                echo "<div><h5>Correo:  " . $r['correo'] . "</h5></div>";
            }
            $sql3 = "SELECT * FROM datos_preparatoria WHERE id_ficha='$id'";
            $result3 = $conexion->query($sql3);
            while ($p = $result3->fetch_assoc()){
                echo "<br>";
                echo "<center>";
                echo "<h2>CBTis No. 114.</h2>";
                echo "<img width='150px'; height= '180px'; src='imagenes/logo.jpg'/>";
                
                echo "<h4>Especialidades.</h4>";
                echo "<div><h6>Primera opción:  " . $p['Esp_1'] . "</h6></div>";
                echo "<div><h6>Segunda opción:  " . $p['Esp_2'] . "</h6></div>";
                echo "<div><h6>Tercera opción:  " . $p['Esp_3'] . "</h6></div>";
                
                echo "<h4>Otros planteles:.</h4>";
                echo "<div><h6>Primera opción:  " . $p['Plantel_1'] . "</h6></div>";
                echo "<div><h6>Segunda opción:  " . $p['Plantel_2'] . "</h6></div>";
                echo "<div><h6>Tercera opción:  " . $p['Plantel_3'] . "</h6></div>";
                echo "</center>";
            }
        }
        echo "</div>";

    ?>



<center>

<script>
    // Función para imprimir la página como PDF
    function imprimirComoPDF() {
        // Abre el cuadro de diálogo de impresión
        window.print();
    }

    window.onload = imprimirComoPDF;
</script>


</body>
</html>