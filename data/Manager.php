<?php
namespace manager;
class Manager
{
    var string $name;
    var string $title;
    public function __construct(string $name = "", string $title = "manager") {
        $this->name = $name;
        $this->title = $title;
    }
    function sayHello(string $name): void
    {
        echo "Hi $name, I'am manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "") {
        parent::__construct($name,"vp");    //constructor overriding
    }

    function sayHello(string $name):void
    {
        echo "Hi $name, I'am Vice President $this->name" . PHP_EOL;
    }
}