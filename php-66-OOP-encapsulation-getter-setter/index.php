<?php


require_once "data/Category.php";

$category = new Category();

$category->setName("Film");
echo "Name: " . $category->getName() . PHP_EOL;

$category->setExpensive(true);
echo "Expensive: " . $category->isExpensive() . PHP_EOL;
 
echo "\n";

$category->setName("");
echo "Name: " . $category->getName() . PHP_EOL;