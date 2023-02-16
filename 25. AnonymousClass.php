<?php
interface HelloWorld
{
    function sayHello(): void;
}

$HelloWorld = new class("Giew") implements HelloWorld
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$HelloWorld->sayHello();
