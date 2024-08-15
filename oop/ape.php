<?php
require_once 'animal.php';

class Ape extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2; // Override legs to 2
    }

    public function yell()
    {
        return "Yell: Auooo<br>";
    }

    public function get_info()
    {
        return parent::get_info() . $this->yell();
    }
}
