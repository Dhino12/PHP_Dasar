<?php

require_once "data/Manager.php";
require_once "helper/Helper.php";

use Data\One\Manager as Manager1; 
use Data\Two\Manager as Manager2; 
use const Helper\APPLICATION;
use function Helper\helpMe;


$manager1 = new Manager1();
$manager2 = new Manager2();

helpMe();
echo APPLICATION . PHP_EOL;
