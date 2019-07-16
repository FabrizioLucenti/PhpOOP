<?php
require_once 'classes/Humanoid.php';

class Human extends Humanoid
{

    protected $_name;
    protected $_hairColor;
    protected $_sex;


    public function getHairColor()
    {
        return $this->_hairColor;
    }
    public function getSex()
    {
        return $this->_sex;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function __construct($name, $hairColor, $sex)
    {
        $this->_name = $name;
        $this->_hairColor = $hairColor;
        $this->_sex = $sex;
    }
    public function talk()
    {
        echo 'Bla bla bla' . '<br>';
    }
}
