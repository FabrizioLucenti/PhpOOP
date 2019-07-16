<?php

// it's possible to extend the classes 
// for example i have a Car class extending Vehicle Class


//motherclass
class Vehicle
{
    protected $color;

    //construct
    public function __construct()
    {
        $this->color = 'red';
    }

    public function getColor()
    {
        return $this->color;
    }
}



//child (share all attributes and methods) just from one parent!!!

class Car extends Vehicle
{
    private $wheels;
    public function __construct()
    {
        parent::__construct();
        $this->wheels = 'Michelin';
    }

    public function getColor()
    {
        return $this->color;
    }
    /*public function whichColor()
    {
        echo 'Car color: ' . $this->color;
    }*/
}

$myVechicle = new Vehicle();

var_dump($myVechicle);
echo '<hr>';


$myCar = new Car();
$myCar->getColor();
var_dump($myCar);
