<?php
class Teacher extends Person
{
public $salary;

public function setsalary($salary)
{$this->salary=$salary;}

public function get_salary()
{return $this->salary;}

public function __construct($name,$dni,$salary)
{
 parent::__construct($name,$dni);
 $this->salary=$salary;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo 'This teacher salary is '. $this->salary.'<br>';
}

}
?>
