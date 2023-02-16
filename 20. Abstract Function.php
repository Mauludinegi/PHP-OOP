<?php
require_once("data/Animal.php");

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "kity";
$cat->run();

$dog = new Dog();
$dog->name = "Shelby";
$dog->run();