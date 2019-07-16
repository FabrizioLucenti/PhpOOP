<?php

class Animal
{

    protected $_legs;
    protected $_color;
    protected $_sex;
    protected $_name;

    public function getLegs()
    {
        return $this->_legs;
    }
    public function getColor()
    {
        return $this->_color;
    }
    public function getSex()
    {
        return $this->_sex;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function __construct($name, $color, $sex)
    {
        $this->_name = $name;
        $this->_color = $color;
        $this->_sex = $sex;
        $this->_legs = 4;
    }
}
