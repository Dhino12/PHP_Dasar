<?php

// https://www.php.net/manual/en/function.date

// Hari
echo date("l") . "<br>";

// Tanggal
echo date("d") . "<br>";

// Bulan
echo date("M") . "<br>";
echo date("J") . "<br>";

// mix format trtentu
echo date("l, d-M-Y") . "<br>";


// https://www.php.net/manual/en/function.time

// time - detik UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time() . "<br>";

echo " 100 hari kedepan adalah = " . date("l", time() + 60 * 60 * 24 * 100) . "<br>";
echo " 100 hari kebelakang adalah = " . date("l, d-M-Y", time() - 60 * 60 * 24 * 100) . "<br>";


// mktime
// membuat sendiri detik
// jam ,menit ,detik, bulan, tanggal ,tahun
echo date("l", mktime(0,0,0,1,12,2021)) . "<br>";


// strtotime    
echo date("l", strtotime("21 jan 2004"));