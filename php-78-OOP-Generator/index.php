<?php

class Data implements IteratorAggregate
{

    var string $first = "First";
    public string $second = "Second";
    private string $thrid = "third";
    protected string $forth = "Forth";


    function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->thrid;
        yield "forth" => $this->forth;
    }
}

// tanpa yield / generator otomatis
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

// iterator otomatis dengan generator, keyword yield

function getOdd(int $max): Iterator
{
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}


$ganjil = getOdd(20);
$genap = getGenap(20);

echo "========== Ganjil ========== \n";
foreach ($ganjil as $value) {
    echo "Ganjil $value" . PHP_EOL;
}

echo "========== Genap ========== \n";

foreach ($genap as $value) {
    echo "Ganjil $value" . PHP_EOL;
}

echo "========== Class Iterator ========== \n";
$data = new Data();

// hanya dapat diakses yg public modifier
foreach ($data as $key => $value) {
    echo "key \t=> $key\nvalue \t=> $value" . PHP_EOL;
}


