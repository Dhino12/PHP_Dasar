<?php 

$sayuran = ["sawi","bayam"];
$buah = ["mangga","apel"];

// jika ada key yang sama maka akan di abaikan
echo "=== Union ===<br>\n";
var_dump($sayuran + $buah);

echo "=== Equality ===<br>\n";
var_dump($sayuran == $buah);  // cek kesamaan key & value

echo "=== Identity ===<br>\n";
var_dump($sayuran === $buah); // cek urutan, dan kesamaan key & value

echo "=== Inequality ===<br>\n";
var_dump($sayuran != $buah);

echo "=== Inequality ===<br>\n";
var_dump($sayuran <> $buah);

echo "=== NonIdentity ===<br>\n";
var_dump($sayuran !== $buah);

?>

