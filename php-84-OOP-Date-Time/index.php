<?php

$date = new DateTime();
echo "=== after set with php.ini === \n";
var_dump($date);

$date->setDate(2021, 3, 28);
$date->setTime(12, 12, 12);
echo "=== after set === \n";
var_dump($date);

echo "=== DateInterval === \n";
// https://www.php.net/manual/en/dateinterval.construct.php
// P = period
// Y = Year
// M = Month
// D = Days
// W = Weeks
// H = hours
// M = minutes
// S = seconds
$date->add(new DateInterval("P1Y"));
var_dump($date);

// ======== kebalikan
$dateInterval = new DateInterval("P1M");
$dateInterval->invert = true;
$date->add($dateInterval);
// ===================
var_dump($date);

echo "=== DateTimeZone === \n";
$tanggal = new DateTime();
$tanggal->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($tanggal);

echo "=== Format DateTime === \n";
// https://www.php.net/manual/en/datetime.format.php
// Y = Year dalam 4 digit
// m = month dalam 2 digit
// d = days dalam 2 digit
// H = hours dalam 2 digit
// i = minuts dalam 2 digit
// s = second dalam 2 digit
echo $tanggal->format("Y-m-d H:i:s") . PHP_EOL;