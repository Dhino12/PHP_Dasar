<?php

class Data
{
    var string $first = "First";
    public string $second = "Second";
    private string $thrid = "third";
    protected string $fourth = "Fourth";
}

$data = new Data();

// iterasi
// hanya dapat diakses yg public modifier
foreach ($data as $key => $value) {
    echo "key => $key\nvalue => $value" . PHP_EOL;
}


