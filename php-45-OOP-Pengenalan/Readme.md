## Object
object adalah data yang berisi attribute / field / properties dan berisi method / function / behaviour

## Class
class adalah blueprint / prototype, class berisikan deklarasi semua properties dan functions yang dimiliki oleh object
setiap object selalu dibuat dari class

```
class Car{
    var $nama = null; // properties 

    // method / function 
    functions cetakNama($name){
        echo $name;
    }
}

$mobil = new Car(); // object 
$mobil->nama = "honda";
$mobil->cetakNama("avanza"); 
```