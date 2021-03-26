<?php

class Person
{
    var $name;
    var string $country = "indonesia";
    var ?int $age = null; // nulable

    function sayHello($name)
    {
        echo "Hallo $name \n\n";
    }
}
