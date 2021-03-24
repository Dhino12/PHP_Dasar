<?php

$name = "Kana";

// reference ke $name
$otherName = &$name;
$otherName = "Yui";

echo "name = " . $name . PHP_EOL;
echo "othername = " . $otherName . PHP_EOL;
