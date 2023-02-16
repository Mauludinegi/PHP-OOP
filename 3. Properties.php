<?php

class Person
{
    var ?string $name = null;      //ini adalah properties dengan nullable
    var string $address;   //ini adalah properties dengan type declaration
    var string $country = "Indonesia";   //ini adalah properties dengan default value;

    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}

//manipulasi Properties
$person = new Person("Giew","Jawa Barat");
$person->name = "Giew";
$person->address = "Jawa Barat";
$person->country = "Indonesia";

var_dump($person);

echo "Name \t\t: $person->name" . PHP_EOL;
echo "Address \t: $person->address" . PHP_EOL;
echo "Country \t: $person->country" . PHP_EOL;



$person2 = new Person("null","jakarta");
$person2->name = null;
$person2->address = "jakarta";
var_dump($person2);
