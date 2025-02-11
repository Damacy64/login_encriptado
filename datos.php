<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 50%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid black; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <div>
    <h2>Datos</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha Registro</th>
            <th>Eliminar</th>
        </tr>
        <?php
        include_once("logica/conexion.php");
        $consulta = "SELECT id,nombre, telefono, correo, fecha FROM datos";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['telefono']}</td>
                        <td>{$fila['correo']}</td>
                        <td>{$fila['fecha']}</td>
                        <td>
                            <a href='logica/eliminar.php?id={$fila['id']}' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\");'>
                                <button class='btn-eliminar'>Eliminar</button>
                            </a>
                        </td>
                      </tr>";
            }
        } else { 
            echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>