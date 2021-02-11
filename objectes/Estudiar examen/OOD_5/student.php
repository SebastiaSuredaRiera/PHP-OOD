<?php
class Student extends Person
{
private $studyField;

public function setstudyField($studyField)
{$this->studyField=$studyField;}

public function get_studyField()
{return $this->studyField;}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo 'This studen ins enrolled in '. $this->studyField.'<br>';
}

}
?>
