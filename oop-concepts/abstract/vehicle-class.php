<?php 
//abstract class works like a template for class that extend it 
// all children classes must have the abstract methods defined here
abstract class Vehicle
{
    abstract public function Start();
    abstract public function Stop();
}