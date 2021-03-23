<?php 

function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total : " . implode(" + " , $values) . " = $total" . PHP_EOL;
}

// implode() -> array to string

echo "== single integer ==";
sumAll(10,10,50,20);

echo "== array ==";
// dengan array
sumAll(...[10,20,30,40]);
