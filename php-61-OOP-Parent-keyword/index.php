<?php

require_once "data/Ractangle.php";

$kotak = new Ractangle();

echo "Child : " . $kotak->getCorner() . PHP_EOL;
echo "Parent : " . $kotak->getParentCorner() . PHP_EOL;
