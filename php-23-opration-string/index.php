<?php 

$name = "lilia";
// PHP_EOL => karakter enter

echo "\n <br>=== Dot Oprator ===" . "<br>\n" ;
echo "Nama " . $name . " <br>\n";
echo "jumlah " . 100 . "<br>\n" . PHP_EOL ; 

echo "\n <br>=== Konversi Oprator ===" . "<br>\n" ;
// Number to String
$valueString = (string)100;
var_dump($valueString);

echo "<br>\n\n";

// String to Number
$valueInt = (int)"100";
var_dump($valueInt);

echo "<br>\n\n";

$valueFloat = (float)"100.11";
var_dump($valueFloat);

echo "\n <br>=== String Akses === " . "<br>\n" ;
$name = "rosi";
echo $name[0] . " " . $name[1] . " " . $name[2] . " " . $name[3] . " <br>\n";

echo "\n <br>=== Variable Parsing ===" . "<br>\n" ;
echo "Hallo, $name " . "<br>\n";

echo "\n <br>=== Curly Brace ===" . "<br>\n" ;
echo "Hai {$name}s " . "<br>\n";
?>