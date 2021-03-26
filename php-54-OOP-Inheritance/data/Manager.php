<?php

class Manager
{
    var $nama; 
    function sayHello(?string $name)
    { 
        echo "Hi, $name i'am " . $this->nama . "\n\n"; 
    }
}


class VicePresident extends Manager
{
}