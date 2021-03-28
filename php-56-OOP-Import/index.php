<?php

require_once "data/Manager.php";
require_once "helper/Helper.php";

use Data\One\Manager; 
use const Helper\APPLICATION;
use function Helper\helpMe;



$manager1 = new Manager();

helpMe();
echo APPLICATION . PHP_EOL;

// tidak bisa import menggunakan use karena akan terjadi konflik lagi
    // gunakan ini jika menggunakan namespace yang berbeda dengan isi sama
    // atau dengan alias
$manager2 = new \Data\Two\Manager(); 