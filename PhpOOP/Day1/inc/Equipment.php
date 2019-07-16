<?php

class Equipment
{
    private $_name;
    private $_description;
    private $_type;
    private $_ad;
    private $_df;
    private $_hp;

    public function getType()
    {
        return $this->_type;
    }

    public function __construct($_name, $_description, $_type, $_ad, $_df, $_hp)
    {
        $this->_name = $_name;
        $this->_type = $_type;
        $this->_description = $_description;
        $this->_ad = $_ad;
        $this->df = $_df;
        $this->_hp = $_hp;
        if ($_type == 'sword') {
            $this->_ad += 10;
        }
        if ($_type == 'shield') {
            $this->_df += 10;
        }
        if ($_type == 'boots') {
            $this->_hp += 10;
        }
    }
}

//$sword = new Equipment('Excalibur', 'sword');
//$shield = new Equipment('Aegis', 'shield');
//$boots = new Equipment('Nike', 'boots');
//var_dump($sword);
