<?php
/**
* There are three variations of the factory pattern:
* Simple Factory Pattern. This allows interfaces for creating objects
* without exposing the object creation logic to the client.
* Factory Method Pattern. This allows interfaces for creating objects, 
* but allow subclasses to determine which class to instantiate.
* Abstract Factory Pattern. Unlike the above two patterns, an abstract factory 
* is an interface to create of related objects without specifying/exposing their classes. 
* We can also say that it provides an object of another factory that is responsible for creating required objects.
**/

//Simple Factory pattern//

class carFactory 
{
    public function __construct()
    {
        //...//
    }
    
    public static function build($type)
    {
        if ( ! $type ) {
            throw new Exception('Invalid car type.');
        } else {
            $type = ucfirst($type);
            $className = 'car_' . $type;
        }

        if ( class_exists($className) ) {
            return new $className();
        } else {
            throw new Exception('Car type not found.');
        }
    }
}

//concrete classes of car types

class car_Sedan 
{
    public function __construct()
    {
        echo "Creating Sedan";
    }
}

class car_Suv 
{
    public function __construct()
    {
        echo "Creating Suv";
    }
}

//client code 
//create new Sedan

$sedan = carFactory::build('sedan');

echo "<br>";
//create new Suv

$suv = carFactory::build('suv');

