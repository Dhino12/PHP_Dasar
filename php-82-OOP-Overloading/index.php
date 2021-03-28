<?php

require_once "data/Data.php";
// overloading di PHP berbeda dengan Java

$zero = new Zero();


echo "==== properties overloading ==== \n"; 
$zero->firstName = "Joko";
$zero->middleName = "Kurniawan";

echo "FirstName: $zero->firstName"  . PHP_EOL;
echo "MiddleName: $zero->middleName"  . PHP_EOL;

echo "==== function overloading ==== \n"; 
$zero->sayHello("Joko","Kurniawan");
Zero::sayHello("Aina","Aoi");