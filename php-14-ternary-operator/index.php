<?php 

$nama = "Joko";
$matkul = "bahasa jawa";
$penduduk = "jawa";

echo $nama === "Joko" && $penduduk === "jawa" ? "$nama orang $penduduk $matkul" : "$nama bukan orang $penduduk";

echo "<br>";

// hanya menentukan mana yang lebih besar
$nilai = 0;
echo $nilai ?: 10;

?>