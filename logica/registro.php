<?php
include_once("conexion.php");

if(isset($_POST['registrar'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contrasenia']) >= 1
    ){
        $name = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $contrasenia = trim($_POST['contrasenia']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre,telefono,correo,contrasenia,fecha)
        VALUES('$name','$telefono','$correo','$contrasenia','$fecha')";
        $resultado = mysqli_connect($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="success">Tu registro se a completado</h3>
            <?php
        } else{
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>