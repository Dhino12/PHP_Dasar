<?php

require_once "data/Person.php";

// object
$orang1 = new Person();

// manipulation properties
$orang1->name = "Joko";
$orang1->country = "Indonesia";

echo "Name : {$orang1->name} \n";
echo "Country : {$orang1->country} \n";
echo "age : {$orang1->age} \n\n";

var_dump($orang1);
