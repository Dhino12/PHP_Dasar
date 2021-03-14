<?php 

$mahasiswa = [
    ["Ratna","00101010111","Teknik Memasak","ratna@gmail.com"],
    ["Kiara","10101010101","Teknik Memasak","kiara@gmail.com"]
];
echo $mahasiswa[0][1] . "<br>";
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
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>Nim :<?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li> 
    </ul>
    <?php endforeach ?>
</body>
</html>