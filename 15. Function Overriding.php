<?php
require_once("data/Manager.php");
use manager\{Manager, VicePresident};

$manager = new Manager("Egi");
$manager->sayHello("Giew");

$vp = new VicePresident("Purnama");
$vp->sayHello("Giew");