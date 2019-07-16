<?php
//$elf = new Character();
class Character
{
    private $_race;
    private $_name;
    private $_hp = 100;
    private $_ad = 10;
    private $_df = 10;
    private $_warCry = 'Attaaaaaack!';
    private $_equipment = [];

    public function getName()
    {
        return $this->_name;
    }

    public function getHp()
    {
        return $this->_hp;
    }

    public function getAd()
    {
        return $this->_ad;
    }

    public function getDf()
    {
        return $this->_df;
    }

    public function getWarCry()
    {
        return $this->_warcry;
    }

    public function getEquipment()
    {
        echo 'This character has ' . count($this->_equipment) . ' piece of equipment' . '<br>';
        return $this->_equipment;
    }

    public function addItem($_equipment)
    {
        if (count($this->_equipment) < 4) {
            $swords = 0;
            $shields = 0;
            foreach ($this->_equipment as $equip) {
                if ($equip->getType() === 'sword') {
                    $swords++;
                } else {
                    return 'you already have 2 swords';
                }

                if ($equip->getType() === 'shield') {
                    $shields++;
                } else {
                    return 'you already have a shield';
                }
            }

            $this->_equipment[] = $_equipment;
            return 'equiped';
        } else {
            return 'You have too many equipment!';
        }
    }

    public function removeItem($_equipment)
    {
        echo array_search($_equipment, $this->_equipment);
    }

    /*public function displayItem()
    {
        var_dump($this->_equipment);
        return 'This character has ' . count($this->_equipment) . ' piece of equipment' . '<br>';
    }*/

    /*public function getStat()
    {
        foreach($_equipment as $key=> $value){
            $this->_ad =
        }
    }*/

    public function __construct($_race, $_name)
    {
        $this->_race = $_race;
        $this->_name = $_name;
        //$this->hp = $hp;
        //$this->ad = $ad;
        //$this->df = $df;
        //$this->warCry = 'Attack!';

        if ($_race == 'Elf') {
            $this->_df -= 3;
        }
        if ($_race == 'Orc') {
            $this->_ad += 2;
            $this->_df += 2;
            $this->_hp -= 10;
            $this->_warCry = 'wwouogrouroulou mlll !!';
        }
    }
}

$_human = new Character('Human', 'Tiago');
var_dump($_human);

$_elf = new Character('Elf', 'Fabrizio');
var_dump($_elf);

$_orc = new Character('Orc', 'Victor');
var_dump($_orc);

require_once 'inc/Equipment.php';

$_shield = new Equipment('Aegis', 'The best shield', 'shield', 0, 0, 0);
var_dump($_elf->addItem($_shield));
//($_elf);
//echo $_elf->displayItem();

$_sword = new Equipment('Excalibur', 'The best sword', 'sword', 0, 0, 0);
var_dump($_elf->addItem($_sword));
//($_elf);
//echo $_elf->displayItem();

var_dump($_elf->getEquipment());
//echo $_elf->getEquipment();


$_elf->removeItem($_sword);
var_dump($_elf);
