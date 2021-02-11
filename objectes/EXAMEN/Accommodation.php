<?php
define ('MENJADOR', array('casa','a la carta','buffet','no'));
class Accommodation {

  public $numHabit ;
  private $menjador ;

protected function get_numHabit()
 {return $this->numHabit;}

protected function set_numHabit($numHabit)
  {$this->numHabit=$numHabit;}

protected function get_menjador()
   {return $this->menjador;}

protected function set_menjador($menjador)
    {$this->menjador=$menjador;}

public function checkIn()
{
$this->numHabit=--$this->numHabit;
}

public function checkOut()
{
$this->numHabit=++$this->numHabit;
}

public function __construct($numHabit,$menjador)
    {
    $this->numHabit=$numHabit;
    $this->menjador=$menjador;
    }





}
 ?>
