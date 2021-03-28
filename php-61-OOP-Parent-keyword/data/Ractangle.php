<?php

require_once "Shape.php";

use Data\Shape;

class Ractangle extends Shape
{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner()
    {
        return parent::getCorner(); //  mengakses parent class
    }
}
