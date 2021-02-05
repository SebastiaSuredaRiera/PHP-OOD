<?php

class PersonOOD6 extends LivingBeing {

  private $Fullname;

  function get_Fullname() {
    return $this->Fullname;
  }

  function setFullname($Fullname)
  {
    $this->Fullname=$Fullname;
}

  public function __construct($Fullname,$Age)
  {
    $this->Fullname=$Fullname;
    parent::setAge($Age);
    parent::setStatus(parent::STATUS[0]);
    parent::setGender(parent::GENDER[1]);
    parent::setEating_Capability(EATING_CAPABILITY[2]);
    parent::setMoving_Capability(MOVING_CAPABILITY[0]);
    parent::setSpeaking_Capability(SPEAKING_CAPABILITY[2]);
    }

    public function print()
    {
      echo "I'm"." ".  $this->get_Fullname();
    echo "I'm"." ". parent::get_Age()." and ".'</br>';
    echo "I'm"." ". parent::get_Status().'</br>';
    echo "I'm"." ". parent::get_Gender().'</br>';
    echo "I'm"." ". parent::get_Eating_Capability().'</br>';
    echo "I'm"." ". parent::get_Moving_Capability().'</br>';
    echo "I'm"." ". parent::get_Speaking_Capability().'</br>';
      }
    }

?>
