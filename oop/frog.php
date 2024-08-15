<?php
require_once 'animal.php';

class Frog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function jump()
    {
        return "Jump: Hop Hop<br>";
    }

    public function get_info()
    {
        return parent::get_info() . $this->jump();
    }
}
