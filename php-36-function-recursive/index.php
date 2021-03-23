<?php 

function factorialRecursive(int $value){

    // ! Warning ! = hati hati dengan looping forever
    // ! Warning ! = memory overflow, yaitu memori digunakan terlalu banyak 
    if($value == 1){
        return 1;
    
    }else{
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(6));
