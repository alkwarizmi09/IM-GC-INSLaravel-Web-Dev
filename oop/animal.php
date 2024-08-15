<?php
class Animal
{
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
    }

    public function get_info()
    {
        return "Name: " . $this->name . "<br>" .
            "Legs: " . $this->legs . "<br>" .
            "Cold Blooded: " . $this->cold_blooded . "<br>";
    }
}
