<?php 

function &getValue(){

    static $value = 100;
    return $value;

}

$a = &getValue(); // variable ini == $value di dalam function &getValue()
$a = 200;

$b = &getValue();

echo $b . PHP_EOL;

?>