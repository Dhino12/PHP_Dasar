<?php 

$x = 10;
if($x < 20){
    echo "$x < 10";
}else if($x > 10){
    echo "$x > 10";
}else{
    echo "tidak keduanya / salah";
}

echo "\n<br>\n";

if($x < 9) :
    echo "$x < 10";
else if($x > 5):
    echo "$x > 10";
else:
    echo "tidak keduanya / salah";
endif;