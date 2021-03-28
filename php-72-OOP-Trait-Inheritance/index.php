<?php

require_once "data/DummyTrait.php";

class Sample
{
    use All;
}

$sample = new Sample();
$sample->doA();
$sample->doB();
$sample->doC();
$sample->doD();
$sample->do1();
$sample->do2();