<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    if ($clave1 != $clave2) {
        echo "<p style='color: red;'>Las claves no coinciden. Inténtalo nuevamente.</p>";
    } else {
        echo "<p>Las claves coinciden.</p>";
    }
}
?>

<form method='POST'>
    <label for='usuario'>Nombre de usuario:</label><br>
    <input type='text' id='usuario' name='usuario' required><br><br>
    <label for='clave1'>Clave:</label><br>
    <input type='password' id='clave1' name='clave1' required><br><br>
    <label for='clave2'>Repite la clave:</label><br>
    <input type='password' id='clave2' name='clave2' required><br><br>
    <input type='submit' value='Enviar'>
</form>
