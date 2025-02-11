<?php
include_once("conexion.php");

    if(isset($_POST['ingresar'])){
        if(strlen($_POST['correo']) >= 1 &&
            strlen($_POST['contrasenia']) >= 1
        ){
            $correo = trim($_POST['correo']);
            $contrasenia = trim($_POST['contrasenia']);
            $resultadoC = mysqli_query($conex, "SELECT contrasenia FROM datos WHERE correo = '$correo'");
            
            if($resultadoC->num_rows > 0){
                $fila = $resultadoC->fetch_assoc();
                $contraE = $fila['contrasenia'];
            }

            if(password_verify($contrasenia, $contraE)){
                $consulta = "SELECT * FROM datos WHERE correo = '$correo' AND contrasenia = '$contrasenia'";
                $resultado = mysqli_query($conex, $consulta);

                if($resultado){
                    echo "<script>
                    alert('Usuario validado.');
                    window.location.href = '../datos.php';
                    </script>";
                    header("Location: datos.php");
                } else {
                    echo "<script>
                    alert('Usuario no validado.');
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Usuario no validado.');
                    </script>";
            }   
        } else {
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
        }
    }
?>