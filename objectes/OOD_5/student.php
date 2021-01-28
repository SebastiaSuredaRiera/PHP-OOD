<?php
class Student extends Person
{
private $studyField;

public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

function get_studyField() {
  return $this->$studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo $this->studyField.'<br>';
}
}
?>
