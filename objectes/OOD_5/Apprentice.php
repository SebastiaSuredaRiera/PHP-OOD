<?php
class Apprentice extends Student {
public $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
$this->FCTBusinessName=$FCTBusinessName;
}
function get_FCTBusinessName() {
  return $this->FCTBusinessName;
}
/*
public function __construct($name,$dni,$FCTBusinessName)
{
  parent::__construct($name,$dni);
  $this->FCTBusinessName=$FCTBusinessName;
}
*/
public function print()
{
parent::print();
echo "This apprentice FCT Bussiness company is ". $this->FCTBusinessName;
}


}
?>
