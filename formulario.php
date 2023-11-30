<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de ingreso</title>
    <link rel="shortcut icon" href="imagenes/silueta.jpg" type="image/x-icon">

    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <!-- Header -->
    <?php include 'header.php';
    ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<div class="container" style="background-color: white; box-shadow: 2px 2px 5px darkgray; margin-top: 3rem; margin-bottom: 3rem;">
        <h1 style="padding:15px;">Ficha de nuevo ingreso.</h1>
            <div class="col-lg-12 contact-form__wrapper p-5 order-lg-1">
                <form action="guardarFicha.php" class="contact-form form-validate" method="POST" novalidate="novalidate">
                    <div class="row">
                        <h2 style="color: darkblue;">Datos personales del alumno:</h2>
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="nombre">Nombre(s)</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Susana">
                            </div>
                        </div>
    
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" for="ApellidoP">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ApellidoP" name="ApellidoP" placeholder="Gonzalez">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" for="ApellidoM">Apellido Materno</label>
                                <input type="text" class="form-control" id="ApellidoM" name="ApellidoM" placeholder="Hernandez">
                            </div>
                        </div>
    
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="fechaNac">Fecha de nacimiento:</label>
                                <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="curp">CURP:</label>
                                <input type="text" class="form-control" id="curp" name="curp" placeholder="GOHS170603HSHGNA6">
                            </div>
                        </div>
    
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" for="sexo">Sexo:</label>
                                <select class="form-control" name="sexo" id="sexo">
                                    <option value="">sexo</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="Telefono">Telefono</label>
                                <input class="form-control" type="text" id="Telefono" name="Telefono" placeholder="xxx-xxx-xxxx"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="Correo">Correo electronico</label>
                                <input class="form-control" type="text" id="Correo" name="Correo" placeholder="xxxx.sss@gmail.com"></input>
                            </div>
                        </div>
    
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="nacionalidad">Nacionalidad</label>
                                <input class="form-control" type="text" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="estado">Estado</label>
                                <input class="form-control" type="text" id="estado" name="estado" placeholder="Estado"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="municipio">Municipio</label>
                                <input class="form-control" type="text" id="municipio" name="municipio" placeholder="Municipio"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="direccion">Dirección</label>
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="CP">Código Postal</label>
                                <input class="form-control" type="text" id="CP" name="CP" placeholder="Código Postal"></input>
                            </div>
                        </div>

                        <br><br><br><br><br><br>
                        <h2 style="color: darkblue;">Datos médicos del alumno:</h2>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="estatura">Estatura</label>
                                <input class="form-control" type="text" id="estatura" name="estatura" placeholder="Estatura"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="peso">Peso</label>
                                <input class="form-control" type="text" id="peso" name="peso" placeholder="Peso"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="tipoSangre">Tipo sangre</label>
                                <input class="form-control" type="text" id="tipoSangre" name="tipoSangre" placeholder="Tipo sangre"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="alergias">Alergias</label>
                                <input class="form-control" type="text" id="alergias" name="alergias" placeholder="Alergias"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="Enfermedades">Enfermedades crónicas</label>
                                <input class="form-control" type="text" id="Enfermedades" name="Enfermedades" placeholder="Enfermedades crónicas"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="medicamento">Medicamento permanente</label>
                                <input class="form-control" type="text" id="medicamento" name="medicamento" placeholder="Medicamento permanente"></input>
                            </div>
                        </div>
                        <h3>En caso de emergencia comunicarse con: </h3>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="tutor1">Nombre contacto 1:</label>
                                <input class="form-control" type="text" id="tutor1" name="tutor1" placeholder="Nombre"></input>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="tutor2">Nombre contacto 2:</label>
                                <input class="form-control" type="text" id="tutor2" name="tutor2" placeholder="Nombre"></input>
                            </div>
                        </div> 

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="telefonoT1">telefono contacto 1:</label>
                                <input class="form-control" type="text" id="telefonoT1" name="telefonoT1" placeholder="xxx-xxx-xxxx"></input>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="telefonoT2">telefono contacto 2:</label>
                                <input class="form-control" type="text" id="telefonoT2" name="telefonoT2" placeholder="xxx-xxx-xxxx"></input>
                            </div>
                        </div>

                        <br><br><br><br><br><br>
                        <h2 style="color: darkblue;">Escuela de procedencia:</h2>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="matricula">Matrícula</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="A1294232SEC">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="cct">Clave del Centro de Trabajo (CCT)</label>
                                <input type="text" class="form-control" id="cct" name="cct" placeholder="09DST0030U">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="nombreEsc">Nombre de la escuela</label>
                                <input type="text" class="form-control" id="nombreEsc" name="nombreEsc" placeholder="Esc. Sec. No. **">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="anioCon">Año en que concluyó la escuela</label>
                                <input type="number" class="form-control" id="anioCon" name="anioCon" placeholder="Año en que concluyó la escuela">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="promedio">Promedio de la secundaria</label>
                                <input type="number" class="form-control" id="promedio" name="promedio" placeholder="Promedio de la secundaria">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="estado_sec">Estado</label>
                                <input class="form-control" type="text" id="estado_sec" name="estado_sec" placeholder="Estado"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="telefono_sec">Telefono secundaria</label>
                                <input class="form-control" type="text" id="telefono_sec" name="telefono_sec" placeholder="xxx-xxx-xxxx"></input>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="tipoSec">Tipo de secundaria</label>
                                <select class="form-control" name="tipoSec" id="tipoSec">
                                    <option value="">Tipo de secundaria...</option>
                                    <option value="Técnica">Técnica</option>
                                    <option value="Federal">Federal</option>
                                    <option value="Estatal">Estatal</option>
                                </select>
                            </div>
                        </div>

                        <br><br><br><br><br><br>
                        <h2 style="color: darkblue;">Datos de padres de familia y/o tutores:</h2>

                        <br><br><h3>Padre de familia o tutor legal:</h3>
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="NombreT1">Nombre del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="NombreT1" name="NombreT1" placeholder="Juan">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="APPT1">Apellido paterno del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="APPT1" name="APPT1" placeholder="Perez">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="APMT1">Apellido materno del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="APMT1" name="APMT1" placeholder="Sandoval">
                            </div>
                        </div>
                        
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="FNT1">Fecha de nacimiento del padre de familia o tutor legal</label>
                                <input type="date" class="form-control" id="FNT1" name="FNT1">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="telT1">Telefono del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="telT1" name="telT1" placeholder="xxx-xxx-xxxx">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="correoT1">Correo electronico del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="correoT1" name="correoT1" placeholder="xxxx.sss@gmail.com">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="NacT1">Nacionalidad del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="NacT1" name="NacT1" placeholder="Nacionalidad">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="DomiT1">Domicilio del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="DomiT1" name="DomiT1" placeholder="Domicilio...">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="OcupacionT1">Ocupación del padre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="OcupacionT1" name="OcupacionT1" placeholder="Ocupación...">
                            </div>
                        </div>

                        <br><br><br><br><h3>Madre de familia o tutora legal:</h3>
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="NombreT2">Nombre de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="NombreT2" name="NombreT2" placeholder="Juan">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="APPT2">Apellido paterno de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="APPT2" name="APPT2" placeholder="Perez">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="APMT2">Apellido materno de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="APmt2" name="APMT2" placeholder="Sandoval">
                            </div>
                        </div>
                        
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="FNT2">Fecha de nacimiento de la madre de familia o tutor legal</label>
                                <input type="date" class="form-control" id="FNT2" name="FNT2">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="telT2">Telefono de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="telT2" name="telT2" placeholder="xxx-xxx-xxxx">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="correoT2">Correo electronico de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="correoT2" name="correoT2" placeholder="xxxx.sss@gmail.com">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="NacT2">Nacionalidad de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="NacT2" name="NacT2" placeholder="Nacionalidad">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="DomiT2">Domicilio de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="DomiT2" name="DomiT2" placeholder="Domicilio...">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="OcupacionT2">Ocupación de la madre de familia o tutor legal</label>
                                <input type="text" class="form-control" id="OcupacionT2" name="OcupacionT2" placeholder="Ocupación...">
                            </div>
                        </div>
                        
                        <br><br><br><br><br><br>
                        <h2 style="color: darkblue;">Preparatoria</h2>

                        <br><h3>Especialidades a escoger:</h3>
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="op1">Opción 1</label>
                                <select class="form-control" name="op1" id="op1">
                                    <option value="">Especialidad...</option>
                                    <option value="1">Administración de Recursos Humanos</option>
                                    <option value="2">Electricidad</option>
                                    <option value="3">Contabilidad</option>
                                    <option value="4">Mecanica</option>
                                    <option value="5">Programación</option>
                                    <option value="6">Mantenimiento</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="op2">Opción 2</label>
                                <select class="form-control" name="op2" id="op2">
                                    <option value="">Especialidad...</option>
                                    <option value="1">Administración de Recursos Humanos</option>
                                    <option value="2">Electricidad</option>
                                    <option value="3">Contabilidad</option>
                                    <option value="4">Mecanica</option>
                                    <option value="5">Programación</option>
                                    <option value="6">Mantenimiento</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="op3">Opción 3</label>
                                <select class="form-control" name="op3" id="op3">
                                    <option value="">Especialidad...</option>
                                    <option value="1">Administración de Recursos Humanos</option>
                                    <option value="2">Electricidad</option>
                                    <option value="3">Contabilidad</option>
                                    <option value="4">Mecanica</option>
                                    <option value="5">Programación</option>
                                    <option value="6">Mantenimiento</option>
                                </select>
                            </div>
                        </div>

                        <br><br><br><h3>Mencione 3 planteles de preferencia</h3>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="opP1">Opción 1</label>
                                <input type="text" class="form-control" id="opP1" name="opP1" placeholder="Opción 1...">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="opP2">Opción 2</label>
                                <input type="text" class="form-control" id="opP2" name="opP2" placeholder="Opción 2...">
                            </div>
                        </div>

                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <label style="color:lightblack;" class="required-field" for="opP3">Opción 3</label>
                                <input type="text" class="form-control" id="opP3" name="opP3" placeholder="Opción 3...">
                            </div>
                        </div>

                        <br><br><br>
    
                        <div class="col-sm-12 mb-3">
                            <button type="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>
<?php include 'footer.php';
    ?>
</body>
</html>