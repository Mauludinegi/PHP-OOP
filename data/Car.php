<?php

namespace Data;

interface HashBrand {
    function getBrand(): string;
}

interface isMaintenance {
    function isMaintenance(): bool;
}

interface Car extends HashBrand
{
    function drive(): void;
    function getTire(): int;
    
}

class Avanza implements Car, isMaintenance
{
    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string {
        return "Toyota";
    }

    function isMaintenance(): bool {
        return false;
    }
}
