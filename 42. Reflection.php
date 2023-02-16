<?php

require_once("exception/ValidationException.php");
require_once("data/LoginRequest.php");
require_once("helper/ValidationUtil.php");

$request = new LoginRequest();
// ValidationUtil::validate($request);
$request->username = "gie";
$request->password = "rahasia";
ValidationUtil::validateReflection(($request));

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "gie";
$register->address = "Gajah";
$register->email = "Gajah@gmail.com";
ValidationUtil::validateReflection($register);