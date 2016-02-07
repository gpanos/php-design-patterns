<?php 
//example class car to use properties methods and visibility 

class Car
{
    public $color;
    public $type;
    private $result;
    
    public function setType($str) 
    {
        $this->type = $str;
    }
    
    public function setColor($str) 
    {
        $this->color = $str;
    }
    
    public function getCar() 
    {
        $this->result = $this->color . ' ' . $this->type;
        return $this->result;
    }
    
}