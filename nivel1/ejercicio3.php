<?php

echo PHP_EOL . "EJERCICIO 3".PHP_EOL;

$words = ["Hola","Php", "Html"]; 

function check($words, $char){


$timesFind = 0;

    foreach($words as $word){
        
            if(stripos($word, $char) === false){
                $timesFind += 1;
            }
        }
    return ($timesFind == 0);
}

var_dump (check($words,'h'));
echo PHP_EOL;
var_dump (check($words,'l'));


?>