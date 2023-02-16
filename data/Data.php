<?php
class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator()
    {
        // $array = [
        //     "First" => $this->first,
        //     "Second" => $this->second,
        //     "Third" => $this->third,
        //     "Forth" => $this->forth
        // ];
        // return new ArrayIterator($array);
        yield "First" => $this->first;
        yield "Second" => $this->second;
        yield "Third" => $this->third;
        yield "Forth" => $this->forth;
    }
}