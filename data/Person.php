<?php

class Person
{
    const AUTHOR = "PROGRAMMER GSJSH";  //ini adalah constant properties
    var string $name;      //ini adalah properties dengan nullable
    var string $address;   //ini adalah properties dengan type declaration
    var string $country = "Indonesia";   //ini adalah properties dengan default value;

    function __construct(string $name, ?string $address)    //ini adalah constructor yang harus di isi saat membuat objek
    {
        $this->name = $name;
        $this->address = $address;
    }


    function __destruct()   //function ini akan dipanggil ketika perintah akan ditutup atau objek akan dihapus
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

    function sayHello(?string $name)     // ini adalah function atau method properties
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;  //digunakan untuk mengakses di class saat ini
    }
}
