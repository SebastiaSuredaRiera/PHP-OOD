<?php

class BusinessAcc extends Accommodation {

const SALES  = array('reunions','audio visuals','internet','no');

private $sales;

protected function get_sales()
 {return $this->sales;}

protected function set_sales($sales)
  {$this->sales=$sales;}

  public function checkIn()
  {
    if ($this->numHabit == 0)
          throw new Exception('check-in Error: Hotel complet. Operació no permesa');

         parent::checkIn();
         echo "check-in successful </br>";
  }




  }

?>
