<?php
$buscar = $_POST['busqueda'];

$localhost ="127.0.0.1";
$root = "root";
$pass = "";
$database = "cbtis114";
$conn = mysqli_connect($localhost, $root,$pass,$database);
if ($conn){
} else {
    echo "no";
}


$consulta = "SELECT * FROM ficha";
    $resultados = mysqli_query($conn, $consulta);
    foreach($resultados as $pros){
        $folio= $pros['folio'];
        $curp= $pros['curp'];

    
    if($folio==$buscar){
        
        header("Location:listarporfolio.php?id=$folio");
    }
    else if($curp==$buscar){
        $id_n='a'.$id;
        header("Location:listarporcurp.php?id=$curp");
    }
    else{
        echo " no jalo";
    }
}

?>