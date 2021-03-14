## Expression
`$a = 5` value dari variable adalah expression yakni `5` atau `$b = $a` <br>

### Expression Complex
`function getValue(){ return 100; }`
`$value = getValue();` getValue() adalah sebuah expression yang memanggil function, apapun code yang bernilai dan mengembalikan nilai itulah expression

```
if(expression){
    statement;
}
```

## Statement
```
$name = "joko";
echo name
$date = new DateTime();
```
`$name = "joko";` ini adalah statement / statement adalah satu baris / kalimat lengkap adalah statement

## Block
block adalah kumpulan statement yang terdiri dari nol atau lebih statement, block diawali dan diakhiri dengan {}
```
function($name)
{
    echo "Hallo " . $name;
}
```
`{echo "Hallo " . $name;}` inilah block