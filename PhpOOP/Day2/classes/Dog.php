<?php
require_once 'Animal.php';

class Dog extends Animal
{

    public function __construct($name, $color, $sex)
    {
        parent::__construct($name, $color, $sex);
    }
    public function bark()
    {
        echo 'Bau Bau';
    }
}
