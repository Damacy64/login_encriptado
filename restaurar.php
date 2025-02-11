<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurar</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form method="post">
        <h2>Restaurar Contraseña</h2>
        <div class="form__input">
            <input type="email" name="correo" placeholder="Correo">
        </div>
        <div class="form__input">
            <input type="password" name="contrasenia" placeholder="Nueva contraseña">
        </div>
        <div class="form__input">
            <input type="password" name="nuevaContrasenia" placeholder="Confirmar contraseña">
        </div>
        <input class="boton" type="submit" name="actualizar" value="Actualizar">
</form>
<?php
    include_once("logica/modificacion.php");
?>
</body>
</html>