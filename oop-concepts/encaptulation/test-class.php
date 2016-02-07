<?php 
/*
* Encaptulation is used when you need to hide something from the public
* Some properties and methods would be declared as private so nonone can change them 
* Encapsulation is protecting your sysetm from being used incorrectly
*/

class Test 
{
    private $_Name;
    
    public function SetName($name)
    {
        $this->_Name = $name;
    }
    
    public function GetName()
    {
        return $this->_Name;
    }
}