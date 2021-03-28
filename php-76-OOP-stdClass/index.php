<?php

require_once "data/Person.php";

$array = [
    "firstName" => "Joko",
    "middleName" => "Kurniawan",
    "lastName" => "Prasetyo"
];

echo "======== array to object ========" . PHP_EOL;
$object = (object)$array;
var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

echo "======== object to array ========" . PHP_EOL;
$arrayMore = (array) $object;
var_dump($arrayMore);

echo "======== class to array ========" . PHP_EOL;
$person = new Person("Nina", 20);
$arrayPerson = (array) $person;
var_dump($arrayPerson);
