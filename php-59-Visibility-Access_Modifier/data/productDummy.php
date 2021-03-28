<?php 

class ProductDummy extends Product{


    public function info()
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Price: " . $this->getPrice() . PHP_EOL;
    }

}