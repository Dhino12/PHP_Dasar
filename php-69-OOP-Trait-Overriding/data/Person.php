<?php

require_once "Sayings.php";
require_once "Behaviour.php";

class Person
{
    use SayHello, SayGoodBye, CanRun;

    public function run(): void
    {
        echo "Person {$this->name} is Running" . PHP_EOL;
    }


    // public function hello()
    // {
    //     echo "Hello in Person" . PHP_EOL;
    // }

    // public function goodBye()
    // {
    //     echo "Goodbye in Person" . PHP_EOL;
    // }
}