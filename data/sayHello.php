<?php

namespace Data\traits;

trait SayHello
{
    function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hallo" . PHP_EOL;
        } else {
            echo "Hallo $name" . PHP_EOL;
        }
    }
}

trait SayGoodBye
{
    function sayGoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait HashName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function sayGoodBye(?string $name): void
    {
        echo "Good by in Person" . PHP_EOL;
    }

    public function sayHello(?string $name): void
    {
        echo "Hallo in Person" . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HashName, CanRun {
        //cara mengoverride yang ada di traits
        //sayHello as private;
        //sayGoodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    // public function sayGoodBye(?string $name): void
    // {
    //     echo "Good by in Person" . PHP_EOL;
    // }

    // public function sayHello(?string $name): void
    // {
    //     echo "Hallo in Person" . PHP_EOL;
    // }
}
