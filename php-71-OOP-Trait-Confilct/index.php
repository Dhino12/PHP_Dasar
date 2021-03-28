<?php

require_once "data/DummyTrait.php";

class Sample
{
    use A,B{
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();