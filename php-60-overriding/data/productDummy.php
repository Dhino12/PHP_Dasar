<?php

class ProductDummy extends Product
{


    public function info()
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Price: " . $this->getPrice() . PHP_EOL;
    }

    // overriding = kemampuan mendeklarasi ulang function di child class, yang sudah ada di parent class (MENIMPA)
    public function buyVagetables(int $bayar): string
    {

        $result = $bayar - $this->getPrice();

        if ($bayar >= $this->getPrice()) {
            return "Class ProductDummy \nHarga buah {$this->name} = {$this->getPrice()} \nanda membayar sebesar $bayar, kembalian anda = $result";
        } else {
            return "Class ProductDummy \nMaaf uang anda tidak cukup";
        }
    }
}
