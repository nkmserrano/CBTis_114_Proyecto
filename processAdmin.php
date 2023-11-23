<?php
$usu= $_POST['usu'];
$correo= $_POST['usu'];
$con=$_POST['con'];

include ('conexion.php');
$consulta="SELECT * FROM `administrador`";
    $resultados = mysqli_query($conn, $consulta);
    foreach($resultados as $pros){
        $usua= $pros['usuario'];
        $correo= $pros['correo'];
        $contra=$pros['contrasena'];
        $id=$pros['id_admin'];
    
    if($usu==$usua && $con==$contra){
        $id_n=$id;
        header("Location:Pedidos.php?id=$id_n");
    }
    else if($correo==$correo && $con==$contra){
        $id_n=$id;
        header("Location:Pedidos.php?id=$id_n");
    }
    else{
    ?>
        <script>
            alert('El Usuario, correo o contraseña es incorrecto, intentelo de nuevo.');
        </script>
    <?php
    header("Location:listarAdmin.php");
    }
}
?>