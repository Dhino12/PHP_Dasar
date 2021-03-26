<?php

class Person
{
    const AUTHOR = "Chiya";

    function info()
    {
        // self access constant in to same class
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}


$chiya = new Person();

$chiya->info();
