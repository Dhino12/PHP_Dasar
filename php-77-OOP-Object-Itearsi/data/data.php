<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $thrid = "third";
    protected string $forth = "Forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        $iterator = new ArrayIterator($array);
        return $iterator;
    }
}

$data = new Data();

// hanya dapat diakses yg public modifier
foreach ($data as $key => $value) {
    echo "key => $key\nvalue => $value" . PHP_EOL;
}


