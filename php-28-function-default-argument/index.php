<?php 


// ========= Function Default Argument =========
function sayHallo($name = "Joko"){
    echo "Hallo $name, i'm from function" . PHP_EOL;
}
sayHallo("Rudi");
sayHallo();

/*      note 
    jika argument lebih dari satu 
    dan default argument ada di awal [ itu tidak berguna ];
    --- biasakan default argument berada di belakang ----
*/

?>