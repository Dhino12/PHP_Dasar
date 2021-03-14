<?php 

function salam($waktu ,$nama){
    return "Selamat $waktu, $nama";
}

function salam2($waktu, $nama = "Tao"){
    echo "Selamat $waktu, $nama";
}

function calculate($num1, $num2){
    return $num1 + $num2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam2("Pagi","Kiana") ?></h1>
    <h1><?php salam2("Malam") ?></h1>
    <h1><?= calculate(1,2) ?></h1>
</body>
</html>