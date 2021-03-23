<?php

// arrow function wajib mengembalikan data
// from PHP 7.4 ==

$fist_name =  "Joko";
$last_name = "Setiawan";

$sayHelloJoko = fn() => "Hello $fist_name $last_name" . PHP_EOL;

echo $sayHelloJoko();

?>