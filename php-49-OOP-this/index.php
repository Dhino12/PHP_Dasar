<?php


require_once "data/Person.php";


$person1 = new Person();
$person1->name = "Latina";
$person1->sayHello("Nana");

$person2 = new Person();
$person2->name = "Joko";
$person2->sayHello(null);
