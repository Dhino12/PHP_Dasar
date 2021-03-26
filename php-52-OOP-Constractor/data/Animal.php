<?php

class Animal
{
    var $name;
    var string $country = "Country";
    var ?int $age = null; // nulable

    function __construct(string $name, ?int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, i'am " . $this->name . "from " . "\n\n";
        } else {
            echo "Hallo $name, i'am " . $this->name . $this->country .  "\n\n";
        }
    }
}
