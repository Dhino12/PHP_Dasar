<?php

namespace Data;

require_once "contravariance/Food.php";

abstract class Animal
{
    public string $name;

    public abstract function run(): void;

    public abstract function eat(AnimalFood $food);
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is Running" . PHP_EOL;
    }

    // ini contravariance 
        // child di jadikan parent
    public function eat(AnimalFood $catFood)
    {
        echo "Cat is eating " . PHP_EOL;
    }
}

class Lion extends Animal
{
    public function run(): void
    {
        echo "Lion $this->name is running " . PHP_EOL;
    }

    // ini contravariance 
        // child di jadikan parent
    public function eat(Food $lionFood)
    {
        echo "Lion is eating" . PHP_EOL;
    }
}
