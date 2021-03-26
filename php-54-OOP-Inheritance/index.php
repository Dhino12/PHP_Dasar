<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->nama = "Chiya";
$manager->sayHello("Nina");

$vp = new VicePresident();
$vp->nama = "Joko";
$vp->sayHello("Riko");