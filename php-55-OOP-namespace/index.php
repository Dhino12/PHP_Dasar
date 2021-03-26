<?php

require_once "data/Manager.php";
require_once "helper/Helper.php";

$manager1 = new \Data\One\Manager();

$manager2 = new Data\Two\Manager();

$manager1->nama = "Nina";
$manager1->sayHello("Chiya");

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();
