<?php 
//magc methods

class Test 
{
    function __construct()
    {
        echo 'Item created';
    }
    
    function __destruct()
    {
        echo 'Item erased';
    }
    
    function __toString()
    {
        return 'Just a string';
    }
    
    function __clone()
    {
        echo 'cloned';
    }
    
    function __invoke($vars)
    {
        echo 'You cant run an obj as a function..';
    }
    
    function __get($param) 
    {
        echo '$param does not exist';
    }
    
    function __set($name, $value)
    {
        echo "You are setting a property of $name -> $value";
        $this->{$name} = $value;
    }
    
    function __call($param, $value)
    {
        echo "You are proccessing $param($value)";
        print_r($value);
    }
}