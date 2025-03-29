<html>
<head>
    <title>contador</title>
</head>
<body>
<h1>contador sensillo</h1>
<p>cantidad de visitas:
<b>
<?php
//para el contador necesitamos un archivo de texto externo donde almacenemos 
//las visitas
//aqui se veran las funciones para trabajar con archivos en este caso 
//abrir,leer,grabar y cerrar ,el contador simplemente se va sumando

$fp=fopen("counter.txt","r+");
$counter=fgets($fp,7);
echo $counter;
rewind($fp);
fputs($fp,$counter);
fclose($fp);
?>
</b>
</p>

</body>
</html>