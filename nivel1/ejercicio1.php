<?php

$array = [];

for($i = 0; $i<5; $i++){
    $array[] = (int) readline("Introduzca el número a continuación : ");
}

foreach($array as $num){
    echo $num;
    echo PHP_EOL;
}

?>