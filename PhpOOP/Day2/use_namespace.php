<?php

require_once 'namespace.php';
require_once 'namespace2.php';


//with namespace
//$myClass = new MyProject\Tools\MyClass();

//without namespace we would have write this:
// $myClass = new MyClass();

//$myClass->doStuff();

use MyProject\Tools\MyClass as TestClass;

$myClass = new TestClass();
$myClass->doStuff();

use MyProject\Utilities\MyClass;

$myClass = new MyClass();
$myClass->doStuff();
