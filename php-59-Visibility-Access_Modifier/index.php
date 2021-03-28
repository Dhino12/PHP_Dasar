<?php

// visibility / Access Modifier

require_once "data/product.php";
require_once "data/productDummy.php";


$product = new Product("Mangga", 20_000);

$dummyProduct = new ProductDummy("Apel", 10_000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

echo " ======== " . PHP_EOL;

echo $dummyProduct->info() . PHP_EOL;
