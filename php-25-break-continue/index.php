<?php 


for($i = 0; $i < 10; $i++){

    if($i == 5){
        continue;
        echo "Hai Latina " . $i. "<br>\n";
    }else if($i > 7){
        echo "Hai Latina " . $i . "<br>\n";
        break;
    }
    echo "Hai Latina " . $i . "<br>\n";    
}


?>