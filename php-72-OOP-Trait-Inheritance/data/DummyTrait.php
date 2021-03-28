<?php 

trait All
{
    use A, B, C;
}

trait A
{
    public function doA()
    {
        echo "ini trait A = a" . PHP_EOL;
    }

    public function doB()
    {
        echo "ini trait A = b" . PHP_EOL;
    }
}

trait B
{
    public function doC()
    {
        echo "ini trait B = C" . PHP_EOL;
    }

    public function doD()
    {
        echo "ini trait B = D" . PHP_EOL;
    }
}

trait C
{
    public function do1()
    {
        echo "ini trait C = 1" . PHP_EOL;
    }

    public function do2()
    {
        echo "ini trait C = 2" . PHP_EOL;
    }
}