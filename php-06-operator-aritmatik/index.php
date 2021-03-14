<?php

// Variable variable
echo "====== Variable variable ======";
$buah = "mangga";
$$nama_jalan = "mangga dua";

echo "Nama Buah: " . $buah . " Nama Jalan: " . $mangga;

echo "====== Oprator Aritmatika (.) ======";

$x = 10;
$y = 20;

$z = $x * $y;
echo "$x * $y =  $z <br>";
$z = $x + $y;
echo "$x + $y =  $z <br>";
$z = $x - $y;
echo "$x - $y =  $z <br>";
$z = $x / $y;
echo "$x / $y =  $z <br>";
$z = $x % $y;
echo "$x % $y =  $z <br>";
echo "negative = " . -$z . "<br> \n";
echo "positive = " . +$z . "<br> \n";

echo "====== Concatanation String (.) ======";

$nama_depan = "Kiana";
$nama_belakang = "Kaslana";

echo "<br>" . $nama_belakang . $nama_belakang . "<br>" . "<br>";

echo "====== Oprator Assigment (=) ======";
echo "$x += $y = " . ($x += $y) . "<br>";
echo "$x -= $y = " . ($x -= $y) . "<br>";
echo "$x *= $y = " . ($x *= $y) . "<br>";
echo "$x /= $y = " . ($x /= $y) . "<br>";
echo "$x %= $y = " . ($x %= $y) . "<br>";

echo "====== Oprator Pangkat ======";
$a = 2;
echo $x ** $a;
