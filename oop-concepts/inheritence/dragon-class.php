<?php 
//Inheritence
class Dragon extends Character
{
    public function __construct($hp, $dmg, $armour) 
    {
        parent::__construct();
        
        $this->hp = $hp;
        $this->dmg = $dmg;
        $this->armour = $armour;
    }
    
}