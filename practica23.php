<?php
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'PHPFACIL');

if ($conexion->connect_error) {
    die('Conexión fallida: ' . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombrecurso = $_POST['nombrecurso'];
    $sql = "DELETE FROM cursos WHERE nombrecur = '$nombrecurso'";

    if ($conexion->query($sql) === TRUE) {
        echo 'Curso eliminado exitosamente.';
    } else {
        echo 'Error: No se pudo eliminar el curso. Verifica que el curso exista.';
    }
}

$conexion->close();
?>

<form method='POST'>
    <label for='nombrecurso'>Nombre del curso a eliminar:</label><br>
    <input type='text' id='nombrecurso' name='nombrecurso' required><br><br>
    <input type='submit' value='Eliminar'>
</form>

