<?php

class Student
{
    var string $id;
    var string $name;
    var int $value;
    private string $sample;
    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Id\t\t: $this->id" . PHP_EOL
            . "Name\t: $this->name" . PHP_EOL 
            . "Value\t: $this->value" . PHP_EOL;
    }

    public function __invoke(...$arguments): void {
        $join = join(",", $arguments);
        echo "Invoke student with $join".PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "value"=> $this->value,
            "sample"=> $this->sample,
            "author" => "Gie",
            "Version" => "1.1.0"
        ];
    }
}
