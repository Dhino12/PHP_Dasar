## Overloading Properties

| Magic Function                | Keterangan                                                                     |
| ----------------------------- | ------------------------------------------------------------------------------ |
| __set($name, $value):void     | Dieksekusi ketika mengubah properties yang tidak tersedia                      |
| __get($name):mixed            | Dieksekusi ketika mengakses properties yang tidak tersedia                     |
| __isset($name):bool           | Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia |
| __unset($name):void           | Dieksekusi ketika menggunakan unset() properties yang tidak tersedia           |

## Overloading Function

| Magic Function                                  | Keterangan                                                                     |
| ----------------------------------------------- | ------------------------------------------------------------------------------ |
| __call($name, $arguments):mixed                 | Dieksekusi ketika memanggil function yang tidak tersedia                       |
| static__callStatic($name, $arguments):mixed     | Dieksekusi ketika memanggil static function yang tidak tersedia                |