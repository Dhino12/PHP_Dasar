<?

echo "====== Array ========= \n <br>";
$sayuran = ["Brokoli","Sawi","Bayam","Cabe","Lengkuas"];

var_dump($sayuran);

echo "=== Print Array brdasarkan Index ==== \n <br>";
echo $sayuran[0];

echo "====== Mengubah Array ========= \n <br>";
$sayuran[0] = "Wortel";

echo "====== Menambah Array ========= \n <br>";
$sayuran[] = "bawang";

echo "====== Hitung Total Array ========= \n <br>";
count($sayuran);

echo "====== Hapus Array ========= \n <br>";
unset($sayuran);

?>