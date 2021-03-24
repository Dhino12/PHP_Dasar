<?php

$name = "Yui"; // global scope

function sayHello()
{

    // php tidak bisa akses variable global dari dalam local scope

    // echo "Hallo $name"; // local scope

    // cara mengataasinya ==== 
    global $name; // ini akan masuk ke variable dari PHP di $GLOBALS (SuperGlobals)

    echo "Hallo $name"; // local scope

    var_dump($GLOBALS);
    
    echo "Hallo" . $GLOBALS["name"] . "\n"; // local scope

    $barang = "smartphone";
}


// php tidak bisa akses variable local dari global scope
// echo $barang;


function increment()
{
    // variable static = siklus hidup dari $counter akan terus menerus
        // dan $counter akan menyimpan nilai sebelumnya
    static $counter = 1;

    echo "Counter = $counter \n";
    $counter++;
}


increment();
increment();
increment();