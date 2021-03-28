<?php

// Covariance memungkinkan kita mengoverride return function yang di parent dengan return value 
// yang lebih spesifik

require_once "data/Animal.php";
require_once "data/contravariance/Food.php";
require_once "data/AnimalShelter.php";

echo "======== Covariance ========" . PHP_EOL;

$catShelter = new Data\CatShalter();
$cat = $catShelter->adopt("Chiya");
var_dump($cat);

$lionShelter = new Data\LionShelter();
$lion = $lionShelter->adopt("Rito");
var_dump($lion);

echo "======== Contravariance ========" . PHP_EOL;
$cat->eat(new \Data\AnimalFood());
$lion->eat(new \Data\Food());
