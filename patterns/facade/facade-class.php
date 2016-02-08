<?php 

/*
* In the facade pattern our class hides a complex subsystem from the calling class.
* The subsystem will know nothing of the calling class.
* It deals with how your code should be structured to make it easily intelligible and keep it 
* well maintained in the long term.
*/

class Stringify
{
    public function __construct($str)
    {
        $this->str = $str;
        $this->_AddText();
        $this->_AddDigits();
        $this->_AddObject(new Stuff);
        echo $this->str;
    }
    
    private function _AddText()
    {
        $this->str .= ' | Adding Text';
    }
    
    private function _AddDigits()
    {
        $this->str .= ' | Adding Digits: 402';
    }
    
    private function _AddObject(Stuff $stuff)
    {
        $this->str .= $stuff->WriteCrap();
    }
}

class Stuff 
{
    public function WriteCrap()
    {
        return ' | '. __CLASS__ . '  Writing Stuff';
    }
}

$str = new Stringify('Test txt');