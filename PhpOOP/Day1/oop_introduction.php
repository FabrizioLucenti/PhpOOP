<?php

/*
Pros of OOP:
- Reusability of your code
- Roles separation

//! Warning you can't re-declare a class : different name


Declare a class:  (a class is like a template of an object)[an object is created with a mold]
*/

//? class Car{ }


// Create an object:  Instance of a class
$myCar = new Car();

// We can create as much objects as we want
$ferrari = new Car();


/* 
Classes have 'internal variables', called 'properties'
They have also 'internal functions' called 'methods'
*/

class Car
{
    //properties
    private $color; // color of the car (red, blue...)
    public $brand; // brand of the car (ferrari, bmw, audi...)
    public $category; // Category of the car

    //Methods

    public function setColor($newColor)
    { //public method (accessible from an object)
        $this->color = $newColor; //edit the properties
    }
    public function getColor()
    {
        return $this->color; //return the properties
    }           //$this refer to this precise object, to himself

    public function getColorUppercase()
    {
        return strtoupper($this->getColor());
    }
}



$myCar = new Car();

//i can access public properties (or methods)
$myCar->brand = 'Ferrari';

//you can't access a private propertie outside the class
//! $myCar->color = 'red'; 

//but i can use public methods
$myCar->setColor('red');

//display the color of the car
echo $myCar->getColor();
//take a look at my object
var_dump($myCar);

//create a variable which is link to the same object as the first one
$anotherCar = $myCar;
var_dump($anotherCar);

$myCar->setColor('blue');
var_dump($myCar);

// echo $ferrari->getColorUppercase();

// Constructor

class Car
{
    //properties
    private $color; // color of the car (red, blue...)
    public $brand; // brand of the car (ferrari, bmw, audi...)
    public $category; // Category of the car

    //Methods

    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }

    public function setColor($newColor)
    { //public method (accessible from an object)
        $this->color = $newColor; //edit the properties
    }
    public function getColor()
    {
        return $this->color; //return the properties
    }           //$this refer to this precise object, to himself

    public function getColorUppercase()
    {
        return strtoupper($this->getColor());
    }

    //override tostring method
    public function __toString()
    {

        return "My car is a " . $this->brand . ", color: " . $this->color
    }
}

echo ($mycar);
$myCar = new Car('red', 'Ferrari');

/*
Good practices:
- One class = One file
- For the Class one capital letter for the first letter and for the other words ( HelloWorld / Car / CofeeMug...)
- 
*/
