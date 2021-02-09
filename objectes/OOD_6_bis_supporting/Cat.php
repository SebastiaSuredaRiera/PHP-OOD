<?php
class Cat extends LivingBeing {

  private $healthCondition;
  private $bestSense;

protected function get_healthCondition() {
    return $this->healthCondition;
  }

protected function sethealthCondition($healthCondition)
  {
    $this->healthCondition=$healthCondition;
}


protected function get_bestSense() {
  return $this->bestSense;
}

protected function setbestSense($bestSense)
{
  $this->bestSense=$bestSense;
}

public function __construct($healthCondition,$bestSense,$Age)
{
  $this->healthCondition=$healthCondition;
  $this->bestSense=$bestSense;
  parent::setAge($Age);
}

public function NextBirthday() {
  $this->Age= $this->Age * 2;
}

function oneYearOlder()
{
    if ($this->Age > 50)
          throw new Exception('Error: Age value too high');
      else
         Cat::NextBirthday();
         echo "My next birthay is ".$this->Age."<br><br>";
}

public function print () {
echo $this->get_healthCondition();
echo $this->get_bestSense();
echo "I'm"." ". parent::get_Age()." and ".'</br>';
}



}
 ?>
