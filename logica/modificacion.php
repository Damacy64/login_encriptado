<?php
include_once("conexion.php");

if(isset($_POST['actualizar'])){
    if(strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contrasenia']) >= 1 &&
        strlen($_POST['nuevaContrasenia']) >= 1
    ){
        $correo = trim($_POST['correo']);
        $contrasenia = trim($_POST['contrasenia']);
        $nuevaContrasenia = trim($_POST['nuevaContrasenia']);

        if($contrasenia != $nuevaContrasenia){
            ?>
                <h3 class="error">Las contraseñas no coinciden</h3>
            <?php
        } else {
            $contraE = password_hash($contrasenia, PASSWORD_DEFAULT); 
            $consulta = "UPDATE datos SET contrasenia = '$contraE' WHERE correo = '$correo'";
            $resultado = mysqli_query($conex, $consulta);

            if($resultado){
                echo "<script>
                    alert('Contraseña actualizada.');
                    </script>";
                header("Location: index.php");
            } else {
                echo "<script>
                    alert('Algo salio mal.');
                    window.location.href = '#';
                    </script>";
            }
        }
    } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>