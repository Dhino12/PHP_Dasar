<?php 

// cara lama
$hari = array("Senin","Selasa","Rabu");

// cara baru
$bulan = ["Januari","Februrari","Maret","April"];
$randomType = ["Januari",2,"Maret",true];

echo "======== Array ========";

echo $bulan[0] ."<br>";
echo var_dump($hari) ."<br>";
print_r($randomType) ."<br>";

$hari[] = "kamis";
echo var_dump($hari) ."<br>";

// Map
$years = array(
    "id" => "1010",
    "name" => "Joko",
    "age" => 30
);
// -- atau 
$tahun = [
    "id" => "0101",
    "name" => "Budi",
    "age" => 30
];

echo "======== Array Map ========";
echo $years["id"] . "<br>\n";
echo $tahun["name"];

echo "======== implement Array in HTML ========";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        .kotak{
            width: 50px;    
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($hari); $i++) {?>
        <div class="kotak"><?= $hari[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($bulan as $key => $value){?>
        <div class="kotak"><?= $value ?></div>
    <?php } ?> 
</body>
</html>