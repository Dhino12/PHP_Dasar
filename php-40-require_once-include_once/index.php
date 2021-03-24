<?php 

// include once/require once = deteksi apakah require/include prnah dipanggil / belum

// jika tidak ketemu file akan error
require_once "lib/myFunction.php";
echo sayHello("Joko","Purnama") . "\n";

require_once "lib/myFunction.php";
echo sayHello("Raka","Purnomo") . "\n";
// jika tidak ketemu file akan tidak error
// include_once "lib/myFunction.php";

?>