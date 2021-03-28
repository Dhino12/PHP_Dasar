<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Joko";
$student1->value = 100;
$student1->setAge(15);

var_dump($student1);

$student2 = clone $student1;

var_dump($student2);

$student3 = new Student();
$student3->id = "1";
$student3->name = "Joko";
$student3->value = 100;
$student3->setAge(15);

// __clone();
// alur | $student1 => clone $student2 => $student2 => __clone()

// ============== Comparing Object ==============
// cek berdasarkan tipe object 
var_dump($student1 === $student2);

// cek berdasarkan properti / function
var_dump($student1 == $student3); 