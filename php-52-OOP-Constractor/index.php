<?php

// Constructor = function yang dipanggil ketika object dibuat

require_once "data/Animal.php";

$person = new Animal("Kucing", 3);

$person->country = "Indonesia";

$person->sayHello("null");

var_dump($person);
