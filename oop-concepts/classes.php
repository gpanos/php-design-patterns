<?php 
//main file to call classes
require_once('vehicle-class.php');
require_once('vehicle/bike-class.php');


$Bike = new Bike();

$Bike->Start();
$Bike->Stop();





