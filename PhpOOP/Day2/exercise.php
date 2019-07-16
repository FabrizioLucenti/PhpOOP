<?php
/* - Part 1 : 
An animal is represented by a number of legs, a color, a sex and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes

- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a sex.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes

- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).

- Part 4 : 

Human can talk.

    -> Change your code to match */

require_once 'classes/Dog.php';
require_once 'classes/Cat.php';
require_once 'classes/Human.php';
require_once 'classes/Robot.php';


$myDog = new Dog('Lessie', 'brown', 'male');
$myDog->bark();
var_dump($myDog);

echo '<hr>';

$myCat = new Cat('Garfield', 'orange', 'male');
$myCat->meow();
var_dump($myCat);

$myHuman = new Human('Fabrizio', 'black', 'male');
$myHuman->talk();
$myHuman->work();

echo '<hr>';

$myRobot = new Robot('112233', 'gray');
$myRobot->work();
//$myRobot->talk();
