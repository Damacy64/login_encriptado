<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="post">
            
            <h2>Registrarse</h2>
            <div class="form__input">
                <input type="text" name="nombre" placeholder="Nombre(s)">
            </div>
            <div class="form__input">
                <input type="text" name="telefono" placeholder="Telefono">
            </div>
            <div class="form__input">
                <input type="email" name="correo" placeholder="Correo">
            </div>
            <div class="form__input">
                <input type="password" name="contrasenia" placeholder="Contraseña">
            </div>
            <input class="boton" type="submit" name="registrar" value="Registrar">    
    </form>
</body>
</html>