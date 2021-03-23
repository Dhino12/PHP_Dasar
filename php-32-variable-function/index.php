<?php  

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName " . PHP_EOL;
}

function foo(){
    echo "foo" . PHP_EOL;
}

function bar(){
    echo "bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

sayHello("Joko","strtoupper");
sayHello("Joko","strtolower");
?>