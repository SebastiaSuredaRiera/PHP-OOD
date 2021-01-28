<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
$this->FCTBusinessName=$FCTBusinessName;
}
function get_FCTBusinessName() {
  return $this->FCTBusinessName;
}

public function print()
{
parent::print();
echo $this->FCTBusinessName;
}


}
?>
