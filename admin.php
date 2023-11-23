<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/silueta.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
    <title>Administrador</title>
</head>
<body>
    <div class="container-page" id="Container">
        <div class="login-container" id="LoginContainer">
            <h1 class="title">CBTis 114</h1>
            <form action="processAdmin.php" method="POST">
                <div class="input-line-container">
                    <span class="name-input">Usuario o correo:</span>
                    <input type="text" name="usu" id="usu" class="input-line" id="">
                </div>
                <div class="input-line-container">
                    <span class="name-input">Contraseña</span>
                    <input type="password" name="con" id="con" class="input-line" id="">
                </div>
                <input type="submit" value="Ingresar a Administración" class="button-login">
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="code.js"></script>
</body>
</html> 