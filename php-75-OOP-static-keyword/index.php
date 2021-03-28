<?php

// static (companion object jika di kotlin);
// dengan static, penggunaan properties / function tanpa inisialisasi

class MathHelper
{
    static public string $name = "MathHelper";

    static public function sum(int ...$numbers):int
    {
        $total = 0;
        foreach ($numbers as $value) {
            $total += $value;
        }

        return $total;
    }
}

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Joko Prayitno";

echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(10, 20, 30, 40, 50);

echo "Total $total " . PHP_EOL;
