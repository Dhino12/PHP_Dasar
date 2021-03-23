<?php 

// Anonymous fanction sebagai argument
function sayGoodBye(string $name, $filter){
    
    $finalName=  $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;

}

sayGoodBye("Mona", function(string $name):string{

    return strtoupper($name);

});

$filterFunction = function(string $name):string{

    return strtoupper($name);

};

sayGoodBye("ucup", $filterFunction);

// Anonymous fanction 
$sayHello = function (string $name){

    echo "Hallo $name" . PHP_EOL;

};

$sayHello("Nana");

// Akses Variable Luar dari anonymous function
$first_name = "Joko";
$second_name = "Baswedan";

$sayHello = function() use ($first_name, $second_name){
    echo "Hallo $first_name" . PHP_EOL;
    echo "Hallo $second_name" . PHP_EOL;
};

$sayHello();

?>