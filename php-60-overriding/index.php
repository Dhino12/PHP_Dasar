<?php

// visibility / Access Modifier

require_once "data/product.php";
require_once "data/productDummy.php";


$product = new Product("Mangga", 20_000);
$dummyProduct = new ProductDummy("Apel", 10_000);

echo " ======== Product ========" . PHP_EOL;
echo $product->getName() . PHP_EOL;
echo "Price: " . $product->getPrice() . PHP_EOL;
echo $product->buyVagetables(4_000) . PHP_EOL;

echo " ======== Dummy Product ========" . PHP_EOL;

echo $dummyProduct->info() . PHP_EOL;
echo $dummyProduct->buyVagetables(15_0000) . PHP_EOL;
