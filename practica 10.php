<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar del 2</title>
</head>
<body>

<h2>Tabla de Multiplicar del 2</h2>

<!-- Usando FOR -->
<h3>Usando FOR</h3>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "<br>";
}
?>

<!-- Usando WHILE -->
<h3>Usando WHILE</h3>
<?php
$j = 1;
while ($j <= 10) {
    echo "2 x $j = " . (2 * $j) . "<br>";
    $j++;
}
?>

<!-- Usando DO-WHILE -->
<h3>Usando DO-WHILE</h3>
<?php
$k = 1;
do {
    echo "2 x $k = " . (2 * $k) . "<br>";
    $k++;
} while ($k <= 10);
?>

</body>
</html>
