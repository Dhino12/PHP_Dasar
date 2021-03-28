<?php

require_once "Console.php";

use Data\Console;
use Data\isMaintenance;

class Person implements Console, isMaintenance
{

    function XBOX(): string
    {
        return " XBOX";
    }

    function PS5(string $name): void
    {
        echo "$name bermain Playstation 5" . PHP_EOL;
    }

    function getBrend(string $namaBrend): string
    {
        if ("XBOX") {
            return "Microsoft";
        } else if ("Playstation 5" || "PS5") {
            return "Sony";
        }
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
