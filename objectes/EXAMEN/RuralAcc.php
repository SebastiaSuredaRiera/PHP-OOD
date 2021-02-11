<?php
define ('TIPUS_ACTIVITATS', array('senderisme','equitacio','ciclisme'));

class RuralAcc extends Accommodation {

const INST_AIRE_LLUIRE = array('jardi','montanya','platja');

private $orgActivitats;
private $instAireLliure;

protected function get_orgActivitats()
 {return $this->orgActivitats;}

protected function set_orgActivitats($orgActivitats)
  {$this->orgActivitats=$orgActivitats;}

protected function get_instAireLliure()
 {return $this->instAireLliure;}

 protected function set_instAireLliure($instAireLliure)
   {$this->instAireLliure=$instAireLliure;}

 public function __construct($numHabit,$menjador,$orgActivitats,$instAireLliure)
 {
   parent::__construct($numHabit,$menjador);
   $this->orgActivitats=$orgActivitats;
   $this->instAireLliure=$instAireLliure;
     }















}
  ?>
