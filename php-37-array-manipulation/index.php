<?php 

// https://www.php.net/manual/en/ref.array.php

$mapFunction = fn(int $value) => $value * 10;

$data = [1,2,3,4,5,6,7,8,9,10];

$dataResult = array_map($mapFunction, $data);

var_dump($dataResult);

echo "===== Sama Saja ======";
var_dump(array_map(fn($data) => $data * 2, $data));

echo "===== rsort ======";
$rsort  ($data);
var_dump($data);

$names = ["Joko","Eko","Budi","Andi"];
echo "===== get key ======";
var_dump(array_keys($names));

echo "===== get values ======";
var_dump(array_values($data));

echo "===== print key & value ======\n";
$complete_name = [
    "first_name" => "Karen",
    "middle_name" => "Kurniawan",
    "last_name" => "Kusuma",
];
foreach ($complete_name as $key => $value) {
    echo "nama $key : " . $value . "<br>\n";
}
?>