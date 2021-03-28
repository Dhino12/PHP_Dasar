<?php

require_once "data/Person.php";

$joko = new Person();
$joko->PS5("Joko");

echo "\n======================\n";

$budi = new Person();
echo "Budi bermain " . $budi->XBOX() . PHP_EOL;
echo "brand " . $budi->getBrend("XBOX") . PHP_EOL;
echo "apakah maintenance ";
var_dump($budi->isMaintenance());
