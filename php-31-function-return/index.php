<?php 

function getFinalValue(int $value){
    if($value >= 80){
        return 'A';
    }else if($value >= 70){
        return 'B';
    }else if($value >= 60){
        return 'C';
    }else if($value >= 50){
        return 'D';
    }else{
        return 'E';
    }

    echo "Ooops !!";
}

function sum(int $first_number, int $second_number):int{
    return $first_number + $second_number;
}

$number_one = 10;
$number_two = 10;
$total = sum($number_one,$number_two);

echo "Total $number_one + $number_two = $total" . PHP_EOL;

$score = getFinalValue(80);
echo "Scor Anda $score";
