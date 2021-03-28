<?php

class Product
{

    // protected dapat diaccess di dalam class / class turunan
    protected string $name; 

    // private tidak dapat diakses di luar class / class turunan . hanya class ini saja
    private int $price; 

    // public dapat diakses oleh seluruh class 
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getPrice(): int
    {
        return $this->price;
    }
}
