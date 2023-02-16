<?php
require_once("data/Person.php");
$array = [
    "firstName" => "Gie",
    "middleName" => "Purnama",
    "lastName" => "Mauludin"
];

$object = (object) $array;
var_dump($object);

echo "FirstName: $object->firstName" . PHP_EOL;
echo "MiddleName: $object->middleName" . PHP_EOL;
echo "LastName: $object->lastName" . PHP_EOL;

$arrray = (array) $object;
var_dump($arrray);

$person = new Person("Giw", "Jawa Barat");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);