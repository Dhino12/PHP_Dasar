<?php

require_once "data/Person.php";
require_once "data/Sayings.php";

$joko = new Person();
$joko->goodBye("Joko");
$joko->name = "Joko";
echo "my name is $joko->name" . PHP_EOL . PHP_EOL;

$chiya = new Person();
$chiya->hello("Chiya");
$chiya->name = "Chiya";
echo "my name is $chiya->name" . PHP_EOL . PHP_EOL;
$chiya->run();
