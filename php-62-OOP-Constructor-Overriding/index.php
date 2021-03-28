<?php

require_once "data/Manager.php";

$manager = new Manager("Chiya", "Manager");
$manager->sayHello("Yui");

$vp = new VicePresident("Nana", "VicePresident");
$vp->sayHello("Kana");
