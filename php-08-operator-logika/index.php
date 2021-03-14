<?php 

$a = 10;
$b = 20;

echo "$a < $b && $a <= $b = " . var_dump($a < $b && $a <= $b) . "<br><br>";

echo "$a < $b || $a <= $b = " . var_dump($a < $b || $a <= $b) . "<br><br>";

echo "$a < $b or $a <= $b = " . var_dump($a < $b or $a >= $b) . "<br><br>";

echo "!($a < $b) or $a <= $b = " . var_dump(!($a < $b) or $a >= $b) . "<br><br>";

echo "$a < $b xor $a <= $b = " . var_dump($a < $b xor $a >= $b) . "<br><br>";

echo "" . var_dump($a < $b || $a % 2 == 0) . "<br><br>";


?>