<?php


require_once "data/Programmer.php";


$company = new Company();

// wajib mengembalikan dengan tipe yang sama / turunan yang sama
$company->programmer = new BackendProgrammer("Joko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Riko");
var_dump($company);

$company->programmer = new Programmer("Dhino");
var_dump($company);

sayHelloProgrammer(new Programmer("Chiya"));
sayHelloProgrammer(new FrontendProgrammer("Nana"));
sayHelloProgrammer(new BackendProgrammer("Kana"));
