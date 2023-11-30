<?php
include_once "config.php";
date_default_timezone_set("America/Mazatlan");
$ahora = date("Y-m-d H:i:s");



$nombre = $_POST['nombre'];
$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$fechaNac = $_POST['fechaNac'];
$curp = $_POST['curp'];
$sexo = $_POST['sexo'];
$telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$nacionalidad = $_POST['nacionalidad'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$direccion = $_POST['direccion'];
$CP = $_POST['CP'];


$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$tipoSangre = $_POST['tipoSangre'];
$alergias = $_POST['alergias'];
$Enfermedades = $_POST['Enfermedades'];
$medicamento = $_POST['medicamento'];
$tutor1 = $_POST['tutor1'];
$tutor2 = $_POST['tutor2'];
$telT1 = $_POST['telefonoT1'];
$telT2 = $_POST['telefonoT2'];

$matricula = $_POST['matricula'];
$cct = $_POST['cct'];
$nombreEsc = $_POST['nombreEsc'];
$anioCon = $_POST['anioCon'];
$promedio = $_POST['promedio'];
$estado_sec = $_POST['estado_sec'];
$tel_sec = $_POST['telefono_sec'];
$tipoSec = $_POST['tipoSec'];

$NombreT1 = $_POST['NombreT1'];
$APPT1 = $_POST['APPT1'];
$APMT1 = $_POST['APMT1'];
$FNT1 = $_POST['FNT1'];
$telT1 = $_POST['telT1'];
$correoT1 = $_POST['correoT1'];
$NacT1 = $_POST['NacT1'];
$DomiT1 = $_POST['DomiT1'];
$OcupacionT1 = $_POST['OcupacionT1'];

$NombreT2 = $_POST['NombreT2'];
$APPT2 = $_POST['APPT2'];
$APMT2 = $_POST['APMT2'];
$FNT2 = $_POST['FNT2'];
$telT2 = $_POST['telT2'];
$correoT2 = $_POST['correoT2'];
$NacT2 = $_POST['NacT2'];
$DomiT2 = $_POST['DomiT2'];
$OcupacionT2 = $_POST['OcupacionT2'];

$op1 = $_POST['op1'];
switch ($op1) {
    case '1':
        $op1 = "Administración de Recursos Humanos";
        break;
    case '2':
        $op1 = "Electricidad";
        break;
    case '3':
        $op1 = "Contabilidad";
        break;
    case '4':
        $op1 = "Mecanica";
        break;
    case '5':
        $op1 = "Programación";
        break;
    case '6':
        $op1 = "Mantenimiento";
        break;

    default:
        $op1 = "No se selecciono.";
        break;
}
$op2 = $_POST['op2'];
switch ($op2) {
    case '1':
        $op2 = "Administración de Recursos Humanos";
        break;
    case '2':
        $op2 = "Electricidad";
        break;
    case '3':
        $op2 = "Contabilidad";
        break;
    case '4':
        $op2 = "Mecanica";
        break;
    case '5':
        $op2 = "Programación";
        break;
    case '6':
        $op2 = "Mantenimiento";
        break;

    default:
        $op2 = "No se selecciono.";
        break;
}
$op3 = $_POST['op3'];
switch ($op3) {
    case '1':
        $op3 = "Administración de Recursos Humanos";
        break;
    case '2':
        $op3 = "Electricidad";
        break;
    case '3':
        $op3 = "Contabilidad";
        break;
    case '4':
        $op3 = "Mecanica";
        break;
    case '5':
        $op3 = "Programación";
        break;
    case '6':
        $op3 = "Mantenimiento";
        break;

    default:
        $op3 = "No se selecciono.";
        break;
}
$opP1 = $_POST['opP1'];
$opP2 = $_POST['opP2'];
$opP3 = $_POST['opP3'];

switch ($sexo) {
    case '1':
        $sexo = "Masculino";
        break;
    case '2':
        $sexo = "Femenino";
        break;
    
    default:
        $sexo = "No seleccionado";
        break;
}



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