<?php

class Person
{
    const AUTHOR = "Programmer Jaman Purba";
}


define("application", "belajar_PHP_OOP");


const DB_VERSION = "1.0.0";

echo application . PHP_EOL;

echo DB_VERSION . PHP_EOL;

// === Access Constant in a Class === 
echo Person::AUTHOR . PHP_EOL;
