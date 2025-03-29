<?php
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'PHPFACIL');

if ($conexion->connect_error) {
    die('Conexión fallida: ' . $conexion->connect_error);
}

$nombrecurso = 'Nuevo Curso';  // Cambia este nombre por el curso que desees
$sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombrecurso')";

if ($conexion->query($sql) === TRUE) {
    echo 'Nuevo curso agregado exitosamente.';
} else {
    echo 'Error: ' . $sql . '<br>' . $conexion->error;
}

$conexion->close();
?>
