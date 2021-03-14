<?php 

$names = ["Joko","Eko","Budi"];
$complete_name = [
    "first_name" => "Karen",
    "middle_name" => "Kurniawan",
    "last_name" => "Kusuma",
];

foreach ($names as $name) {
    echo "nama saya: " . $name . "<br>\n";
}

echo "\n";

foreach ($complete_name as $key => $value) {
    echo "nama $key : " . $value . "<br>\n";
}
?>