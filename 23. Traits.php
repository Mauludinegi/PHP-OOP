<?php
require_once("data/sayHello.php");

use Data\traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->sayGoodBye("Giw");
$person->sayHello("Mauludin");
$person->name = "Gie";

$person->run();
