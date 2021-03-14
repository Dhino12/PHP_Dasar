<?php 
$i = 10;
$b = 20;
$c = "20";

echo "$i < $b <====" . var_dump($i < $b) . "<br>";
echo "$i > $b <==" . var_dump($i > $b) . "<br>";
echo "$i >= $b <====" . var_dump($i >= $b) . "<br>";
echo "$i <= $b <==" . var_dump($i <= $b) . "<br>";
echo "$i == $b <====" . var_dump($i == $b) . "<br>";
echo "$i != $b <==" . var_dump($i != $b) . "<br>";

// operator identity === !==

echo "$i === $c <====" . var_dump($i === $c) . "<br>";
echo "$i !== $c <==" . var_dump($i !== $c) . "<br>";

?>