<?php
require_once("data/Person.php");

$person = new Person("Giew","Jawa Barat");
$person->name = "Giew";
$person->address = "Jawa Barat";
$person->country = "Indonesia";


echo "Name \t\t: $person->name" . PHP_EOL;
echo "Address \t: $person->address" . PHP_EOL;
echo "Country \t: $person->country" . PHP_EOL . PHP_EOL;

$person->sayHello("Egi");  //cara mengakses funtion yang berada dalam objek;
$person->info();        //self keyword
