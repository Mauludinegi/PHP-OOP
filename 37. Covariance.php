<?php
use Data\DogShelter;

require_once("data/Animal.php");
require_once("data/AnimalShelter.php");
use Data\{Animal, AnimalShelter, Cat, CatShelter, Dog};

$catShelter = new CatShelter(); 
$cat = $catShelter->adopt("Luna");  //covariance

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");