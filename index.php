<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
            <h2>Inicio Sesion</h2>
            <div class="form__input">
                <input type="email" name="correo" placeholder="Correo">
            </div>
            <div class="form__input">
                <input type="password" name="contrasenia" placeholder="Contraseña">
            </div>
            <input class="boton" type="submit" name="ingresar" value="Ingresar">
            <div>
                <a href="registrar.php">Registrarse</a>
                <a href="restaurar.php">Restaurar</a>
            </div>
    </form>
    <?php
        include_once("logica/login.php");
    ?>
</body>
</html>