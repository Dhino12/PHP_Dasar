<?php 

echo "<br>Desimal (base 10)";
// Khusus untuk isi dari variable
var_dump(123);

echo "<br>Octal (base 8)";
var_dump(0123);

echo "<br>Hexa (base 16)";
var_dump(0x1A);

echo "<br>Binary (base 2)";
var_dump(0b1111);

echo "<br>Underscore in Number";
var_dump(1_234_567);

echo "Floating Point";
var_dump(1.321);

echo "<br>Floating Point dengan e notation plus (1.2 x 1000)  ";
var_dump(1.2e3);

echo "<br>Floating Point dengan e notation minu (7 x )  ";
var_dump(7e-3);

echo "<br>Integer Overflow 32Bit: ";
var_dump(2147483648);

echo "<br>Integer Overflow 64Bit: ";
var_dump(9223372036854775807);
var_dump(9223372036854775808);

echo "<br>Boolean : Benar";
var_dump(true);

echo "<br>Boolean : Salah";
var_dump(false);

echo '<br>String Single Quote';
echo "<br>String Double \t Quote\n";

echo <<< LILI
    String HereDoc
    Hayuk Main Yuk
    ke sana;
    "main Bola hari jum'at" \n
LILI ;
echo <<< 'ROZA'
    String Newdoc
    Dikit Lagi Puasa
    ULULULU
    
ROZA ;
?>
