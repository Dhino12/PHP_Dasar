<?php 

function sum(int $first_number, int $second_number){
    $total = $first_number + $second_number;
    echo "Total $first_number + $second_number = $total" . PHP_EOL;
}

sum(10,10);
sum("100","100");
sum(true,false);

// sum([],[]); error tidak bisa konversi ke int

?>