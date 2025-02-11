<?php
include_once("conexion.php");

if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    $consulta = "DELETE FROM datos WHERE id = '$id'";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado){
        echo "<script>
                alert('Registro eliminado correctamente.');
                window.location.href = '../datos.php';
                </script>";
    } else {
        echo "Error al eliminar el registro";
    }
} else {
    echo "ID no proporcionado";
}
?>