<?php

class Manager
{
    var string $name;
    function sayHello(string $name): void
    {
        echo "Hi $name, I'am manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{

}

$manager = new Manager();
$manager->name = "Giew";
$manager->sayHello("Egi");


$vp = new VicePresident();
$vp->name = "Egi";
$vp->sayHello("Giew");