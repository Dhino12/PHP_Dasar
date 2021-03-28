<?php

require_once "data/Student.php";

// https:://www.php.net/manual/en/language.oop5.magic.php
// magic function adalah function yang sudah ditentukan kegunaannya di PHP
// magic function biasanya berawalan __
// magic function seperti __construct, __clone, __destruct, __invoke, __debugInfo()

echo "======== __toString() ======== " . PHP_EOL;
// conversi ke string
$student = new Student();
$student->id = "1";
$student->name = "Joko";
$student->value = 100;
$student->setAge(20);

$string = (string) $student;
echo $string . PHP_EOL;

echo "======== __invoke() ======== " . PHP_EOL;
$student("joko", 10);

echo "======== __debugInfo() ======== " . PHP_EOL;
// ini sama seperti var_dump() hanya saja manual
var_dump($student);
