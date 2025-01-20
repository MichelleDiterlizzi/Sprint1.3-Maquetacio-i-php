<?php

//EJERCICIO 1;

$array = [1, 2, 3, 4, 5];

echo $array[0]."<br>";
echo $array[1]."<br>";
echo $array[2]."<br>";
echo $array[3]."<br>";
echo $array[4]."<br>";

echo "<br>" . "<h3>"."EJERCICIO 2"."</h3>"."<br>";

$X = array (10, 20, 30, 40, 50,60);

echo "El array tiene ". count($X) . " elementos.";

unset($X[2]);

echo"<br>";

print_r($X);

echo"<br>";

$X = array_values($X);

print_r($X)."<br>";
echo "<br>"."El array tiene ". count($X) . " elementos.";


echo "<br>" . "<h3>"."EJERCICIO 3"."</h3>"."<br>";

$words = ["Hola","Php", "Html"];

function check($words, $char){

    $timesFind = 0;

    for($i = 0; $i < count($words); $i++){
        $find = false;
        for($j = 0; $j < strlen($words[$i]); $j++){

            if(strtolower($words[$i][$j] ) == strtolower($char)  && !$find){
                $timesFind +=1;
                $find = true;
            }
        }
    }

    return $timesFind == (count($words))? "True" : "False";;
}

echo check($words,'h');
echo "<br>";
echo check($words,'l');

echo "<br>" . "<h3>"."EJERCICIO 4"."</h3>"."<br>";

$info = [
    'nombre' => 'Michelle',
    'edad' => '26 años',
    'email' => 'michelle.diterlizzi98@gmail.com',
    'comida favorita' => 'lasagna'
];

print_r ($info);
?>