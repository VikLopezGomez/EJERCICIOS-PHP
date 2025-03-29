<?php
// Definir un vector asociativo con claves de acceso de 5 usuarios
$usuarios = array(
    "usuario1" => "clave123",
    "usuario2" => "pass456",
    "usuario3" => "seguro789",
    "usuario4" => "acceso000",
    "usuario5" => "entrada555"
);

// Imprimir cada clave de acceso con el nombre del usuario
foreach ($usuarios as $usuario => $clave) {
    echo "Usuario: $usuario - Clave: $clave<br>";
}
?>
