<?php 

// jika tidak ketemu file akan error
require "lib/myFunction.php";
echo sayHello("Joko","Purnama") . "\n";

// jika tidak ketemu file akan tidak error
// include "lib/myFunction.php";

?>