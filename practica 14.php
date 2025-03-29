<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Modificación de Contrato</title>
</head>
<body>

    <h1>Contrato de Venta</h1>
    
    <form action="procesar_contrato.php" method="post">
        <label for="contrato">Ingrese los datos del contrato:</label><br>
        <textarea id="contrato" name="contrato" rows="10" cols="60">
        En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..], 
        en su carácter de Apoderado, con domicilio en la calle [……..], y el Sr. [……..], futuro comprador 
        con domicilio en [……..], celebrar el presente contrato de compraventa del producto [……..], 
        de acuerdo a los términos y condiciones establecidos, a partir del día [……..].
        </textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
