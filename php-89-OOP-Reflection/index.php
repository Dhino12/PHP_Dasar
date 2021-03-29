<?php

require_once "helper/Validation.php";
require_once "helper/LoginRequest.php";
require_once "helper/RegisterUser.php";


// www.php.net/manual/en/book.reflection.php
// Reflection adalah fitur yang biasanya digunakan saat kita membuat framework

$loginRequest = new LoginRequest();
$registerRequest = new RegisterUser();
$loginRequest->username = "Kotono"; 
$loginRequest->password = "Chiya"; 

// tanpa Reflection
echo "=========== Tanpa Reflection ===========" . PHP_EOL;
ValidationUtil::validationRequest($loginRequest);
ValidationUtil::validationRequest($loginRequest);

// dengan reflection
echo "=========== Dengan Reflection ===========" . PHP_EOL;
$registerRequest->name = "joko";
$registerRequest->address = "jogja";
$registerRequest->email = "joko@yahoo.com";

ValidationUtil::validateReflection($loginRequest);
ValidationUtil::validateReflection($registerRequest);