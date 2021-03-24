<?php

// https://www.w3schools.com/php/func_array_search.asp

echo "====== Array ========= <br> \n";
$sayuran = ["Brokoli", "Sawi", "Bayam", "Cabe", "Lengkuas"];

var_dump($sayuran);

echo " \n <br>=== Print Array brdasarkan Index ==== <br> \n";
echo $sayuran[0];

echo " \n <br>====== Mengubah Array ========= <br> \n";
$sayuran[0] = "Wortel";
print_r($sayuran);

echo " \n <br>====== Menambah Array ========= <br> \n";
$sayuran[] = "bawang";
print_r($sayuran);

echo " \n <br>====== Hitung Total Array ========= <br> \n";
echo count($sayuran);

echo " \n <br>====== Hapus Array ========= <br> \n";
unset($sayuran);
if (empty($sayuran)) {
    echo "Sayurannya hilang";
} else {
    print_r($sayuran);
}

echo " \n <br>====== arsort() ========= <br> \n ";
// =========== sort berdasarkan value (descending) ===========

$nilai = [100, 50, 20, 30, 70, 80, 90, 98, 78, 85];
arsort($nilai);
foreach ($nilai as $value) {
    echo $value . " ";
}

echo " \n <br>====== asort() ========= <br> \n ";
// =========== sort berdasarkan value (ascending) ===========

asort($nilai);
foreach ($nilai as $value) {
    echo $value . " ";
}

echo " \n <br>====== krsort() ========= <br> \n ";
// =========== sort berdasarkan index (descending) ===========

krsort($nilai);
foreach ($nilai as $value) {
    echo $value . " ";
}

echo " \n <br>====== ksort() ========= <br> \n ";
// =========== sort berdasarkan index (ascending) ===========

ksort($nilai);
foreach ($nilai as $value) {
    echo $value . " ";
}

echo " \n <br>====== cek array null/empty =========<br>\n";
var_dump(empty($sayuran)) . "\n";
var_dump(is_null($nilai)) . "\n";

echo " \n <br>====== array search =========<br>\n";
$a = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue"
);
echo "ada di index ke- " .  array_search("red", $a) . "\n";
