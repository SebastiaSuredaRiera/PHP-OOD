<?php
class aprendiz extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{$this->FCTBusinessName=$FCTBusinessName;}

public function get_FCTBusinessName()
{return $this->FCTBusinessName;}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo 'This aprendiz FCT Business company is '. $this->FCTBusinessName.'<br>';
}
}
 ?>
