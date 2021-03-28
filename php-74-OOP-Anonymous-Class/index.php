<?php

require_once "data/HelloWorld.php";

// ========== tanpa constructor ==========
$helloWorld = new class implements HelloWorld
{
    public function sayHello()
    {
        echo "Hello World, Welcome to Anonymous Class" . PHP_EOL;
    }
};

// ========== dengan constructor ==========
$halloDunia = new class("Dunia Class") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello World, Welcome to $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
$halloDunia->sayHello();
