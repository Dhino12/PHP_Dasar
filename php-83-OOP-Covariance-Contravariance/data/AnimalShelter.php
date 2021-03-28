<?php

namespace Data;
 

use Data\Cat;
use Data\Lion;

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class LionShelter implements AnimalShelter
{
    // covariance ======
        // parent di jadikan child
        // return yang lebih spesifik
    public function adopt(string $name): Lion
    {
        $lion = new Lion();
        $lion->name = $name;
        return $lion;
    }
}

class CatShalter implements AnimalShelter
{
    // covariance ======
        // parent di jadikan child
        // return yang lebih spesifik
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}
