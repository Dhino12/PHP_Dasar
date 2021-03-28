<?php

class Manager
{
    protected $name;

    private string $title;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(?string $name)
    {
        echo "Hi $name, i'am " . $this->name . " your $this->title" ."\n\n";
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name)
    {
        // tidak wajib (direkomendasikan)
        parent::__construct($name, "VP");
    }

    public function sayHello(?string $name)
    {
        echo "Hi $name, my name is {$this->name}" . PHP_EOL;
    }
}
