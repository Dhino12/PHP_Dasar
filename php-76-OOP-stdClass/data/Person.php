<?php

require_once "Console.php";

use Data\Console;
use Data\isMaintenance;

class Person
{

    const AUTHOR = "Chiya";

    var string $name;
    var ?int $age = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function SayHello(?string $name)
    {
        if ($name != null) {
            echo "Hai $name, i'am $this->name";
        } else {
            echo "Create by Author : $this->AUTHOR";
        }
    }
}
