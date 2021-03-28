<?php

// dengan exception program akan otomatis berhenti dengan output error
    // untuk itu ada try_catch
require_once "helper/Validation.php";
require_once "helper/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Joko";
$loginRequest->password = "riko";

validateLoginRequest($loginRequest);