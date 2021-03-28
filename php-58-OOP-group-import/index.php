<?php

require_once "data/Manager.php";
require_once "helper/Helper.php";

use Data\One\{Manager, Admin, Karyawan}; 
use Data\Two\{Manager as vp1, Manager as vp2}; 
use const Helper\APPLICATION;
use function Helper\helpMe;


$manager1 = new Manager();
$admin = new Admin();
$karyawan = new Karyawan();
$vp = new vp1();
$vp = new vp2();

helpMe();
echo APPLICATION . PHP_EOL;
