<?php

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendEngineer extends Programmer
{
}

class FrontendEngineer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendEngineer) {
        echo "Hello Backend Engineer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendEngineer) {
        echo "Hello Frontend Engineer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
