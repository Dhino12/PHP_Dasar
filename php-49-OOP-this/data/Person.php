<?php

class Person
{
    var $name;
    var string $country = "indonesia";
    var ?int $age = null; // nulable

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is " . $this->name . "\n\n";
        } else {
            echo "Hallo $name, my name is " . $this->name . "\n\n";
        }
    }
}
