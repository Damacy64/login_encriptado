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
        $contraE = password_hash($contrasenia,PASSWORD_DEFAULT);
        $consulta = "INSERT INTO datos(nombre,telefono,correo,contrasenia,fecha)
        VALUES('$name','$telefono','$correo','$contraE','$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            echo "<script>
                    alert('Registro completado.');
                    </script>";
            header("Location: index.php");
        } else{
            echo "<script>
                    alert('Algo salio mal.');
                    window.location.href = '#';
                    </script>";
        }
    } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>