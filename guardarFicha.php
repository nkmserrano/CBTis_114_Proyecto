<?php
include_once "config.php";

$ahora = date("Y-m-d H:i:s");



$nombre = $_GET['nombre'];
$ApellidoP = $_GET['ApellidoP'];
$ApellidoM = $_GET['ApellidoM'];
$fechaNac = $_GET['fechaNac'];
$curp = $_GET['curp'];
$sexo = $_GET['sexo'];
$telefono = $_GET['Telefono'];
$Correo = $_GET['Correo'];
$nacionalidad = $_GET['nacionalidad'];
$estado = $_GET['estado'];
$municipio = $_GET['municipio'];
$direccion = $_GET['direccion'];
$CP = $_GET['CP'];


$estatura = $_GET['estatura'];
$peso = $_GET['peso'];
$tipoSangre = $_GET['tipoSangre'];
$alergias = $_GET['alergias'];
$Enfermedades = $_GET['Enfermedades'];
$medicamento = $_GET['medicamento'];
$tutor1 = $_GET['tutor1'];
$tutor2 = $_GET['tutor2'];
$telT1 = $_GET['telefonoT1'];
$telT2 = $_GET['telefonoT2'];

$matricula = $_GET['matricula'];
$cct = $_GET['cct'];
$nombreEsc = $_GET['nombreEsc'];
$anioCon = $_GET['anioCon'];
$promedio = $_GET['promedio'];
$estado_sec = $_GET['estado_sec'];
$tel_sec = $_GET['telefono_sec'];
$tipoSec = $_GET['tipoSec'];

$NombreT1 = $_GET['NombreT1'];
$APPT1 = $_GET['APPT1'];
$APMT1 = $_GET['APMT1'];
$FNT1 = $_GET['FNT1'];
$telT1 = $_GET['telT1'];
$correoT1 = $_GET['correoT1'];
$NacT1 = $_GET['NacT1'];
$DomiT1 = $_GET['DomiT1'];
$OcupacionT1 = $_GET['OcupacionT1'];

$NombreT2 = $_GET['NombreT2'];
$APPT2 = $_GET['APPT2'];
$APMT2 = $_GET['APMT2'];
$FNT2 = $_GET['FNT2'];
$telT2 = $_GET['telT2'];
$correoT2 = $_GET['correoT2'];
$NacT2 = $_GET['NacT2'];
$DomiT2 = $_GET['DomiT2'];
$OcupacionT2 = $_GET['OcupacionT2'];

$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$op3 = $_GET['op3'];
$opP1 = $_GET['opP1'];
$opP2 = $_GET['opP2'];
$opP3 = $_GET['opP3'];



// Obtener los primeros 3 dígitos
$Num = substr($curp, 4, 6);
$primerosDigitos = substr($curp, 0, 4);
$folio = 'FOLIO'.$Num.'_'.$primerosDigitos;
// Mostrar el resultado
echo $folio;


$sentencia = $base_de_datos->prepare("INSERT INTO `ficha`(`folio`, `curp`, `fecha`) VALUES (?, ?, ?)");
$resultado = $sentencia->execute([$folio, $curp, $ahora]);

$localhost ="127.0.0.1";
$root = "root";
$pass = "";
$database = "cbtis114";
$conn = mysqli_connect($localhost, $root,$pass,$database);
if ($conn){
} else {
    echo "no";
}


$consulta = "SELECT id FROM `ficha` ORDER BY id DESC LIMIT 1";
        $r = mysqli_query($conn, $consulta);
        while($res= mysqli_fetch_assoc($r)){
            $id_ficha = $res['id'];
        }

$person = $base_de_datos->prepare("INSERT INTO `datos_personales_alumno`(`id_ficha`, `Nombre`, `ApellidoP`, `ApellidoM`, `Fecha_Nac`, `CURP`, `sexo`, `telefono`, `correo`, `nacionalidad`, `estado`, `municipio`, `direccion`, `cp`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$guardarPerson = $person->execute([$id_ficha, $nombre, $ApellidoP, $ApellidoM, $fechaNac, $curp, $sexo, $telefono, $Correo, $nacionalidad, $estado, $municipio, $direccion, $CP]);

$Medic = $base_de_datos->prepare("INSERT INTO `datos_medicos_alumno`(`id_ficha`, `estatura`, `peso`, `tipo_sangre`, `alergias`, `enfermedades`, `medicamentos`, `CnombreT1`, `CnombreT2`, `CtelT1`, `CtelT2`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$guardarMedic = $Medic->execute([$id_ficha, $estatura, $peso, $tipoSangre, $alergias, $Enfermedades, $medicamento, $tutor1, $tutor2, $telT1, $telT2]);

$Sec = $base_de_datos->prepare("INSERT INTO `escuela_procedencia`(`id_ficha`, `matricula`, `cct`, `nombreEsc`, `anioEsc`, `promedio`, `estado`, `telefonoEsc`, `TipoEsc`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$guardarSec = $Sec->execute([$id_ficha, $matricula, $cct, $nombreEsc, $anioCon, $promedio, $estado_sec, $tel_sec, $tipoSec]);

$T1 = $base_de_datos->prepare("INSERT INTO `datos_tutores`( `id_ficha`, `NombreT`, `APPT`, `APMT`, `FNT`, `telT`, `correoT`, `nacionalidadT`, `domicilioT`, `ocupacion`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$guardarT1 = $T1->execute([$id_ficha, $NombreT1, $APPT1, $APMT1, $FNT1, $telT1, $correoT1, $NacT1, $DomiT1, $OcupacionT1]);

$T2 = $base_de_datos->prepare("INSERT INTO `datos_tutores`(`id_ficha`, `NombreT`, `APPT`, `APMT`, `FNT`, `telT`, `correoT`, `nacionalidadT`, `domicilioT`, `ocupacion`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$guardarT2 = $T2->execute([$id_ficha, $NombreT2, $APPT2, $APMT2, $FNT2, $telT2, $correoT2, $NacT2, $DomiT2, $OcupacionT2]);

$prepa = $base_de_datos->prepare("INSERT INTO `datos_preparatoria`(`id_ficha`, `Esp_1`, `Esp_2`, `Esp_3`, `Plantel_1`, `Plantel_2`, `Plantel_3`) VALUES (?, ?, ?, ?, ?, ?, ?)");
$GuardarPrepa = $prepa->execute([$id_ficha, $op1, $op2, $op3, $opP1, $opP2, $opP3]);

if($resultado === TRUE){
	header("Location: formulario.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>