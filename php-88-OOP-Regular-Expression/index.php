<?php

//https://www.php.net/manual/en/pcre.pattern.php

// i = incase sensitive / kata besar kecil tidak masalah
// \s = spasi

echo "=========== preg_match_all() ===========" . PHP_EOL;
$matches = [];
$result = preg_match_all("/joko|chiya|nina/i", "Joko adalah teman Chiya", $matches);
var_dump($result);
var_dump($matches);

echo "=========== preg_replace() ===========" . PHP_EOL;
$result = preg_replace("/anjing|fack/i", "***", "fack dikejar anjing");
var_dump($result);

echo "=========== preg_split() ===========" . PHP_EOL;
$result = preg_split("/[\s,-]/", "Riko maen yuk bareng joko,budi,dan teman-teman");
var_dump($result);