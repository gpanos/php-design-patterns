<?php 
//Inheritence
class Character
{
    protected $hp = 100;
    protected $dmg = 10;
    protected $armour = 10;
    
    protected function __construct() 
    {
        echo 'The character created';
    }
    
    public function Attack()
    {
        echo 'Attack for' . $this->dmg;
    }
    
}