<?php

namespace Data;

abstract class Location
{
    public string $name;

    // function abstract hanya berlaku pada abstract class
    protected abstract function setName(string $name): string;
}

class City extends Location
{
    function setName(string $name): string
    {
        $this->name = $name;
        return $this->name;
    }
}

class Country extends Location
{
    function setName(string $name): string
    {
        $this->name = $name;
        return $this->name;
    }
}
