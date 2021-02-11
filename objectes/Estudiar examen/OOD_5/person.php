<?php
class Person
{
public $name;
public $dni;

public function setname($name)
{$this->name=$name;}

public function get_name()
{return $this->name;}

public function setdni($dni)
{$this->dni=$dni;}

public function get_dni()
{return $this->dni;}




public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print()
{
  echo $this->name.'<br>';
  echo $this->dni.'<br><br>';
}
}
?>
