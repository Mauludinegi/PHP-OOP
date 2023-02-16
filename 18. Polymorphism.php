<?php

require_once("data/Programmer.php");

$company = new Company();
$company->programmer = new Programmer("Giw");
var_dump($company);
$company->programmer = new BackendEngineer("Giw");
var_dump($company);
$company->programmer = new FrontendEngineer("Giw");
var_dump($company);

sayHelloProgrammer(new Programmer("Gie"));
sayHelloProgrammer(new BackendEngineer("Gie"));
sayHelloProgrammer(new FrontendEngineer("Gie"));