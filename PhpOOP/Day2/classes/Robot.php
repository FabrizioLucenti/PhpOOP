<?php
require_once 'classes/Humanoid.php';

class Robot extends Humanoid
{

    protected $_ID;
    protected $_color;


    public function getID()
    {
        return $this->_ID;
    }
    public function getColor()
    {
        return $this->_color;
    }

    public function __construct($id, $color)
    {
        $this->_ID = $id;
        $this->_color = $color;
    }
}
