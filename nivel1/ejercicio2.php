<?php


echo PHP_EOL . "EJERCICIO 2".PHP_EOL;

$x = array (10, 20, 30, 40, 50, 60);

echo "El array tiene ". count($x) . " elementos actualmente:  ".PHP_EOL;
print_r($x);

echo "Eliminaremos el elemento de la posición 2 (30) usando la función unset".PHP_EOL;
unset($x[2]);
echo "El array tiene ahora ". count($x) . " elementos: " . PHP_EOL ;
print_r($x);
echo PHP_EOL;

echo "Ahora vamos a reindexar el array usando array_value:" . PHP_EOL;
$x = array_values($x);
print_r($x).PHP_EOL;

?>