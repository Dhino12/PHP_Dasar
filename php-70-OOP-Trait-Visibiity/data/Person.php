<?php

require_once "Sayings.php";
require_once "Behaviour.php";

class Person extends ParentPerson
{
    use SayHello, SayGoodBye, CanRun;

    public function run(): void
    {
        echo "Person {$this->name} is Running" . PHP_EOL;
    }
}


class ParentPerson 
{
    public function hello(?string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }

    public function goodBye(?string $name)
    {
        echo "Goodbye in Person" . PHP_EOL;
    }
}