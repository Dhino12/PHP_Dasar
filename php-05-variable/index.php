<?php 

// Variable 
$nama = "lili";
echo "Nama Saya: " . $nama . "<br>\n";

// Variable variable
$buah = "mangga";
$$nama_jalan = "mangga dua";

echo "Nama Buah: " . $buah . " Nama Jalan: " . $mangga;

// Variable Constant
define("AUTHOR","Programmer Zaman Old");
define("APP_VERSION", 100 );
echo "Author: " . AUTHOR . "\n <br>";
echo "App Version: " . APP_VERSION . "\n <br>";

// Variable Null
$name = "Kana";
$name = null; // kosong
$age = null; // kosong
// ---- cek nul / tidak ----
echo "is name null ? " . is_null($name) . "\n <br>";
var_dump(is_null($name));

// Delete Variable
$sayuran = "wortel";
unset($sayuran);

// cek apakah variable ada / tidak / null / tidak
var_dump(isset($sayuran));

?>

