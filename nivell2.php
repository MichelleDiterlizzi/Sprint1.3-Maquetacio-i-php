<?php

echo "<br>" . "<h3>"."EJERCICIO 1"."</h3>"."<br>";

$firstList = [2, 24, 3.5, 7.1 ,5 ,1.5];

$secondList = [3, 7.1, 7, 4, 2, 1.5 , 2];

function interseccion($firstList, $secondList){

    return array_intersect($firstList, $secondList);
}

echo "Números comunes de los dos arrays: "; 
print_r (interseccion($firstList, $secondList));
echo "<br>";

function mescla($firstList, $secondList){
    return array_merge($firstList, $secondList);
}

echo "Union de los dos arrays: "; 
print_r (mescla($firstList, $secondList));
echo "<br>";

echo "<br>" . "<h3>"."EJERCICIO 2"."</h3>"."<br>";


?>

