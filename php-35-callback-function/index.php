<?php 

// callback sudah diplajari sejak anonymous function dan varibale function
function sayHello(string $name, callable $filter){

    $finalName = call_user_func($filter, $name);

    // call_user_func(calback function, value_yang_digunakan_untuk callback);
        // untuk memanggil function callable / callback function

    echo "Hello $finalName" . PHP_EOL;

}

sayHello("Monna", function($name) { return strtoupper($name); } );
sayHello("Miki", fn($name) => strtoupper($name) );
sayHello("Mirai", "strtoupper");
sayHello("Miku", "strtolower");

?>