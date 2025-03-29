<?php
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'PHPFACIL');

if ($conexion->connect_error) {
    die('Conexión fallida: ' . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombrealumno = $_POST['nombrealumno'];
    $sql = "SELECT * FROM alumnos WHERE nombre = '$nombrealumno'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'><tr><th>Código</th><th>Nombre</th><th>Curso</th></tr>";
        while($row = $resultado->fetch_assoc()) {
            echo "<tr><td>" . $row['codigo'] . "</td><td>" . $row['nombre'] . "</td><td>" . $row['curso'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo 'No se encontraron alumnos con ese nombre.';
    }
}

$conexion->close();
?>

<form method='POST'>
    <label for='nombrealumno'>Nombre del alumno:</label><br>
    <input type='text' id='nombrealumno' name='nombrealumno' required><br><br>
    <input type='submit' value='Buscar'>
</form>
