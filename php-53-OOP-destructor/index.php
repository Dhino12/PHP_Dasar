<?php

// Destructor adalah function yang dipanggil ketika object dihapus dari memori
// ini digunakan ketika menutup koneksi ke database / menutup proses menulis file
// agar tidak terjadi memori leak

require_once "data/Animal.php";

$neko = new Animal("Neko", 10);
$kocheng = new Animal("Kocheng", 5);

echo "Program Selesai" . PHP_EOL;
