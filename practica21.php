<?php
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'PHPFACIL');

if ($conexion->connect_error) {
    die('Conexión fallida: ' . $conexion->connect_error);
}

$sql = "SELECT * FROM cursos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'><tr><th>Código</th><th>Nombre Curso</th></tr>";
    while($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row['codigo'] . "</td><td>" . $row['nombrecur'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo 'No hay registros en la tabla.';
}

$conexion->close();
?>
