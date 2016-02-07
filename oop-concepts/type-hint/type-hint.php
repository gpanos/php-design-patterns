<?php 
/*
* Type hinting forces to use certain parameters...
* For example we have class Test with a public method Write()
* and a class Foo with a constructor. In the constructor we pass as 
* a parameter Test $a which means $a is the instanse of the class Test
* that way class Foo has access to all public methods and properties of class Test
*/

class Test 
{    
    public function Write()
    {
        echo 'Write something from test';
    }
}

class Foo
{
    public function __construct(Test $a)
    {
        $this->NewObj = $a;
        $this->NewObj->Write();
    }
}

