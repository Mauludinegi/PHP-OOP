<?php
namespace Data;
require_once("data/Food.php");

abstract class Animal
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void //ini adalah Contravarience
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
