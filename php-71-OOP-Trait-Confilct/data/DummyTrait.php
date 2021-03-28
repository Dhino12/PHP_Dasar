<?php 

trait A
{
    public function doA()
    {
        echo "ini a" . PHP_EOL;
    }

    public function doB()
    {
        echo "ini b" . PHP_EOL;
    }
}

trait B
{
    public function doA()
    {
        echo "ini A" . PHP_EOL;
    }

    public function doB()
    {
        echo "ini B" . PHP_EOL;
    }
}