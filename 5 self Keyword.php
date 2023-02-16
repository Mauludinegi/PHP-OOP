<?php
require_once("data/Person.php");
$person = new Person("Giew","Jawa Barat");
$person->name = "Giew";
$person->address = "Jawa Barat";
$person->country = "Indonesia";
$person->info(); //self keyword