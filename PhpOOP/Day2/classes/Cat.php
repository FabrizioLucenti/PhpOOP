<?php
require_once 'Animal.php';

class Cat extends Animal
{

    public function __construct($name, $color, $sex)
    {
        parent::__construct($name, $color, $sex);
    }
    public function meow()
    {
        echo 'Meow Meow';
    }
}
