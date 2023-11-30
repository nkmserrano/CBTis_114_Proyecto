<?php
$usu= $_POST['usu'];
$correo= $_POST['usu'];
$con=$_POST['con'];

include ('config.php');
    $resultados = $base_de_datos->query("SELECT * FROM `administrador`");
    $res = $resultados->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $r){ 
        $usua= $fi->usuario; 
        $contra=$fi->contra; 
        $id=$fi->id;
    
    if($usu==$usua && $con==$contra){
        $id_n=$id;
        header("Location:listarAdmin.php");
    }
    else{
    ?>
        <script>
            alert('El Usuario o contraseña es incorrecto, intentelo de nuevo.');
        </script>
    <?php
    header("Location:listarAdmin.php");
    }
}
?>