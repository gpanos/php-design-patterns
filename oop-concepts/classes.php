<?php 
//main file to call classes
require_once('encaptulation/test-class.php');

$test = new Test();
$test->SetName('john');
$test->_Name;
echo $test->GetName();









