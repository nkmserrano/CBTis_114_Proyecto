<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar ficha</title>
    <link rel="shortcut icon" href="imagenes/silueta.jpg" type="image/x-icon">

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

<body class="bg-dark text-white">
<div class="cbtis">
    <header>
    
    <!-- Header -->
    <?php include 'header.php';
    
    ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<div class="container" style="background-color: white; box-shadow: 2px 2px 5px darkgray; margin-top: 3rem; margin-bottom: 3rem;">
        <h1 style="padding:15px;">Busca tu ficha de nuevo ingreso.</h1>
            <div class="col-lg-12 contact-form__wrapper p-5 order-lg-1">
                <form action="buscarFicha.php" method="POST" class="contact-form form-validate" novalidate="novalidate">
                    <div class="row">
                        <h2 style="color: darkblue;">Ingresa tu curp o folio de la ficha:</h2>
                        <div class="col-sm-4 mb-6">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $folio; ?>">
                                <label style="color:lightblack;" class="required-field" for="busqueda">CURP O FOLIO</label>
                                <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="CURP O FOLIO">
                            </div>
                        </div>

    
                        <div class="col-sm-12 mb-3">
                            <button type="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
                        </div>
    
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php';
    
    ?>
</body>
</html>