<?php 

trait SayGoodBye
{
    public function goodBye(?string $name)
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good Bye $name " . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name)
    {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name " . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}