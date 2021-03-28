<?php

require_once "helper/Validation.php";
require_once "helper/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Kotono";
$loginRequest->password = "Chiya";

try {

    // block yang kira-kira akan terjadi error
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    
    // perintah yang dijalankan ketika error
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} finally{

    // perintah yang selalu dijalankan
    echo "End" . PHP_EOL;
}
